<script setup lang="ts">
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from "@headlessui/vue";
import { IconSettings, IconTrash, IconX, IconPlus, IconMinus } from "@tabler/icons-vue";
import { onBeforeUnmount, onMounted, ref, computed, watch } from "vue";
import { Switch } from "@headlessui/vue";
import salzburg from "@/assets/images/icon/sports-salzburg.png";

// Interfaces
interface Bet {
  id: string;
  matchId: number;
  homeTeam: string;
  awayTeam: string;
  betType: string;
  betOption: string;
  odds: number;
  isLive: boolean;
  league?: string;
}

interface BettingSlip {
  bets: Bet[];
  stakeAmount: number;
  totalOdds: number;
  potentialWin: number;
}

interface Match {
  id: number;
  home_team: string;
  away_team: string;
  match_date: string;
  status: string;
  league: string;
  odds: Array<{
    id: string;
    bet_type: string;
    bet_option: string;
    odds: number;
  }>;
}

// Reactive state
const enabled = ref(false);
const isCardExpanded = ref(false);
const activeItem = ref("Single");
const userBalance = ref(0);
const userId = ref(1); // This should come from your auth system
const loading = ref(false);
const loadingBalance = ref(false);
const error = ref("");

// Betting slip state
const bettingSlips = ref<Record<string, BettingSlip>>({
  Single: { bets: [], stakeAmount: 0, totalOdds: 1, potentialWin: 0 },
  Multiple: { bets: [], stakeAmount: 0, totalOdds: 1, potentialWin: 0 },
  System: { bets: [], stakeAmount: 0, totalOdds: 1, potentialWin: 0 }
});

// Current slip
const currentSlip = computed(() => bettingSlips.value[activeItem.value]);

// Predefined stake amounts for each slip type
const quickStakes = ref({
  Single: [25, 50, 100, 200],
  Multiple: [30, 60, 100, 250],
  System: [50, 100, 200, 500]
});

// API base URL - adjust according to your setup
const API_BASE_URL = 'http://localhost/primebet/api/betting_api.php';

// Methods
const toggleCard = () => {
  isCardExpanded.value = !isCardExpanded.value;
};

const handleClick = (item: string) => {
  activeItem.value = item;
};

const items = ["Single", "Multiple", "System"];

// Fetch user balance
const fetchUserBalance = async () => {
  if (!userId.value) return;
  
  loadingBalance.value = true;
  try {
    const response = await fetch(`${API_BASE_URL}?action=user_balance&user_id=${userId.value}`);
    const data = await response.json();
    
    if (data.success) {
      userBalance.value = data.balance;
    } else {
      console.error('Error fetching balance:', data.message);
    }
  } catch (error) {
    console.error('Error fetching balance:', error);
  } finally {
    loadingBalance.value = false;
  }
};

// Calculate odds and potential win for each slip type
const calculateSlip = (slipType: string) => {
  const slip = bettingSlips.value[slipType];
  
  if (slip.bets.length === 0) {
    slip.totalOdds = 1;
    slip.potentialWin = 0;
    return;
  }
  
  // Calculate total odds based on slip type
  switch (slipType) {
    case 'Single':
      // For single bets, use the odds of the first (and only) bet
      slip.totalOdds = slip.bets[0]?.odds || 1;
      break;
    case 'Multiple':
      // For multiple bets, multiply all odds together
      slip.totalOdds = slip.bets.reduce((total, bet) => total * bet.odds, 1);
      break;
    case 'System':
      // For system bets, use a simplified calculation (multiply all odds)
      // In a real system, you'd calculate combinations
      slip.totalOdds = slip.bets.reduce((total, bet) => total * bet.odds, 1);
      break;
  }
  
  // Calculate potential win
  slip.potentialWin = slip.stakeAmount * slip.totalOdds;
};

// Watch for changes in stakes and recalculate
watch(() => currentSlip.value.stakeAmount, () => {
  calculateSlip(activeItem.value);
});

// Watch for changes in bets and recalculate
watch(() => currentSlip.value.bets, () => {
  calculateSlip(activeItem.value);
}, { deep: true });

// Set stake amount
const setStakeAmount = (amount: number) => {
  currentSlip.value.stakeAmount = amount;
};

// Set max stake (user balance)
const setMaxStake = () => {
  currentSlip.value.stakeAmount = Math.min(userBalance.value, 10000); // Cap at reasonable amount
};

// Add bet to slip (this would be called from your betting interface)
const addBetToSlip = (bet: Bet, slipType: string = activeItem.value) => {
  const slip = bettingSlips.value[slipType];
  
  // Check if bet already exists
  const existingBet = slip.bets.find(b => b.id === bet.id);
  if (existingBet) {
    error.value = "Bet already added to slip";
    setTimeout(() => error.value = "", 3000);
    return;
  }
  
  // For single bets, replace existing bet
  if (slipType === 'Single') {
    slip.bets = [bet];
  } else {
    // For multiple and system bets, add to existing bets
    slip.bets.push(bet);
  }
  
  calculateSlip(slipType);
};

// Remove bet from slip
const removeBet = (betId: string) => {
  const slip = currentSlip.value;
  slip.bets = slip.bets.filter(bet => bet.id !== betId);
  calculateSlip(activeItem.value);
};

// Clear all bets from current slip
const clearSlip = () => {
  const slip = currentSlip.value;
  slip.bets = [];
  slip.stakeAmount = 0;
  slip.potentialWin = 0;
  calculateSlip(activeItem.value);
};

// Validate bet placement
const validateBet = (): string | null => {
  const slip = currentSlip.value;
  
  if (slip.bets.length === 0) {
    return 'Please add bets to your slip';
  }
  
  if (slip.stakeAmount <= 0) {
    return 'Please enter a valid stake amount';
  }
  
  if (slip.stakeAmount > userBalance.value) {
    return 'Insufficient balance';
  }
  
  if (slip.stakeAmount < 1) {
    return 'Minimum bet amount is $1';
  }
  
  // Additional validation for system bets
  if (activeItem.value === 'System' && slip.bets.length < 3) {
    return 'System bets require at least 3 selections';
  }
  
  return null;
};

// Place bet
const placeBet = async () => {
  const validationError = validateBet();
  if (validationError) {
    error.value = validationError;
    setTimeout(() => error.value = "", 3000);
    return;
  }
  
  const slip = currentSlip.value;
  loading.value = true;
  error.value = "";
  
  try {
    const response = await fetch(`${API_BASE_URL}?action=place_bet`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        user_id: userId.value,
        slip_type: activeItem.value.toLowerCase(),
        stake_amount: slip.stakeAmount,
        bets: slip.bets.map(bet => ({
          match_id: bet.matchId,
          bet_type: bet.betType,
          bet_option: bet.betOption,
          odds: bet.odds
        }))
      })
    });
    
    const data = await response.json();
    
    if (data.success) {
      // Show success message
      alert(`🎉 Bet placed successfully!\nSlip ID: ${data.slip_id}\nPotential Win: $${slip.potentialWin.toFixed(2)}`);
      
      // Update user balance
      userBalance.value = data.new_balance;
      
      // Clear the slip
      clearSlip();
      
      // Store bet in recent bets (optional)
      const recentBets = JSON.parse(localStorage.getItem('recentBets') || '[]');
      recentBets.unshift({
        id: data.slip_id,
        type: activeItem.value,
        stake: slip.stakeAmount,
        potentialWin: slip.potentialWin,
        placedAt: new Date().toISOString()
      });
      localStorage.setItem('recentBets', JSON.stringify(recentBets.slice(0, 10))); // Keep last 10
      
    } else {
      error.value = data.message || 'Error placing bet';
      setTimeout(() => error.value = "", 5000);
    }
  } catch (err) {
    console.error('Error placing bet:', err);
    error.value = 'Network error. Please try again.';
    setTimeout(() => error.value = "", 5000);
  } finally {
    loading.value = false;
  }
};

// Book bet (save for later)
const bookBet = () => {
  const validationError = validateBet();
  if (validationError) {
    error.value = validationError;
    setTimeout(() => error.value = "", 3000);
    return;
  }
  
  // Save to localStorage
  const bookedBets = JSON.parse(localStorage.getItem('bookedBets') || '[]');
  bookedBets.push({
    id: Date.now().toString(),
    type: activeItem.value,
    ...JSON.parse(JSON.stringify(currentSlip.value)), // Deep copy
    createdAt: new Date().toISOString()
  });
  localStorage.setItem('bookedBets', JSON.stringify(bookedBets));
  
  alert('📚 Bet booked successfully! You can place it later from your booked bets.');
};

// Add funds to balance (for testing purposes)
const addFunds = async (amount: number) => {
  if (!userId.value) return;
  
  try {
    const response = await fetch(`${API_BASE_URL}?action=update_balance`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        user_id: userId.value,
        amount: amount
      })
    });
    
    const data = await response.json();
    
    if (data.success) {
      userBalance.value = data.new_balance;
      alert(`💰 $${amount} added to your balance!`);
    } else {
      error.value = data.message || 'Error adding funds';
      setTimeout(() => error.value = "", 3000);
    }
  } catch (err) {
    console.error('Error adding funds:', err);
    error.value = 'Network error. Please try again.';
    setTimeout(() => error.value = "", 3000);
  }
};

// Format currency
const formatCurrency = (amount: number): string => {
  return new Intl.NumberFormat('en-US', {
    style: 'currency',
    currency: 'USD',
    minimumFractionDigits: 2
  }).format(amount);
};

// Format odds
const formatOdds = (odds: number): string => {
  return odds.toFixed(2);
};

// Outside click handler
const handleClickOutSide = (event: MouseEvent) => {
  const target = event.target as HTMLElement;
  if (isCardExpanded.value && !target.closest(".fixed_footer")) {
    isCardExpanded.value = false;
  }
};

// Sample bets for testing (remove in production)
const addSampleBets = () => {
  const sampleBets: Bet[] = [
    {
      id: "sample_1",
      matchId: 1,
      homeTeam: "Salzburg",
      awayTeam: "Union Berlin",
      betType: "over_under",
      betOption: "over 2.5",
      odds: 3.80,
      isLive: true,
      league: "UEFA Champions League"
    },
    {
      id: "sample_2", 
      matchId: 2,
      homeTeam: "Manchester City",
      awayTeam: "Liverpool",
      betType: "match_result",
      betOption: "home_win",
      odds: 1.95,
      isLive: false,
      league: "Premier League"
    }
  ];
  
  // Add to different slips for demo
  if (bettingSlips.value.Single.bets.length === 0) {
    addBetToSlip(sampleBets[0], 'Single');
  }
  if (bettingSlips.value.Multiple.bets.length === 0) {
    sampleBets.forEach(bet => addBetToSlip(bet, 'Multiple'));
  }
  if (bettingSlips.value.System.bets.length === 0) {
    sampleBets.forEach(bet => addBetToSlip(bet, 'System'));
  }
};

// Lifecycle hooks
onMounted(() => {
  document.body.addEventListener("click", handleClickOutSide);
  fetchUserBalance();
  
  // Add sample bets for demo (remove in production)
  addSampleBets();
});

onBeforeUnmount(() => {
  document.body.removeEventListener("click", handleClickOutSide);
});

// Expose methods for parent components
defineExpose({
  addBetToSlip,
  clearSlip,
  toggleCard
});
</script>

<template>
  <div
    class="fixed_footer p3-bg rounded-5"
    :class="isCardExpanded ? 'expandedtexta' : 'expanded2'"
  >
    <!-- Header -->
    <div class="fixed_footer__head py-3 px-4">
      <div class="d-flex justify-content-between">
        <div class="fixed_footer__head-betslip d-flex align-items-center gap-2">
          <span class="fw-bold">Betslip</span>
          <span class="fixed_footer__head-n1">{{ currentSlip.bets.length }}</span>
          <button @click="toggleCard" class="footfixedbtn" type="button">
            <i
              class="ti ti-arrow-badge-down-filled n5-color fs-four fixediconstyle"
              :class="{ 'rotate-180': isCardExpanded }"
            ></i>
          </button>
        </div>
        <div class="fixed_footer__head-quickbet d-flex align-items-center gap-1">
          <span class="fw-bold">
            Balance: 
            <span v-if="loadingBalance">...</span>
            <span v-else>{{ formatCurrency(userBalance) }}</span>
          </span>
          <Switch v-model="enabled" as="template" v-slot="{ checked }">
            <button
              class="position-relative d-inline-flex h-6 w-11 align-items-center rounded-full border border-2"
              :class="checked ? 'bg-success' : 'bg-secondary'"
            >
              <span
                :class="checked ? 'translate-x-5' : 'translate-x-1'"
                class="d-inline-block h-4 w-4 transform rounded-full bg-white transition"
              ></span>
            </button>
          </Switch>
          <!-- Quick add funds button (for testing) -->
          <button 
            @click="addFunds(100)" 
            class="btn btn-sm btn-outline-success ms-2"
            title="Add $100 (Test)"
          >
            <IconPlus width="16" height="16" />
          </button>
        </div>
      </div>
    </div>

    <!-- Error Display -->
    <div v-if="error" class="alert alert-danger mx-4 mb-3" role="alert">
      {{ error }}
    </div>

    <!-- Content -->
    <div class="fixed_footer__content position-relative">
      <TabGroup>
        <TabList class="tab-list">
          <Tab
            v-for="item in items"
            class="tab-item"
            :class="activeItem == item ? 'n11-bg' : ''"
            :key="item"
            @click="() => handleClick(item)"
          >
            <span class="tab-trigger cpoint">{{ item }}</span>
          </Tab>
        </TabList>
        
        <TabPanels class="tab-container n11-bg">
          <!-- Betting Panels -->
          <TabPanel v-for="slipType in items" :key="slipType" class="">
            <!-- Bets Display -->
            <div v-if="bettingSlips[slipType].bets.length > 0">
              <div 
                v-for="bet in bettingSlips[slipType].bets" 
                :key="bet.id"
                class="fixed_footer__content-live px-4 py-3 mb-3 border-bottom"
              >
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <div class="d-flex align-content-center gap-1">
                    <img :src="salzburg" width="20" height="20" alt="Team Icon" />
                    <span class="fs-seven cpoint">{{ bet.homeTeam }}</span>
                    <span class="fs-seven">vs.</span>
                    <span class="fs-seven cpoint">{{ bet.awayTeam }}</span>
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <span v-if="bet.isLive" class="badge bg-danger fs-nine">Live</span>
                    <IconX 
                      class="n4-color cpoint" 
                      @click="removeBet(bet.id)"
                      width="16" 
                      height="16"
                      title="Remove bet"
                    />
                  </div>
                </div>
                <div class="d-flex align-items-center gap-2 mb-1">
                  <span class="fixed_footer__content-scr py-1 px-2 fs-seven fw-bold">
                    {{ formatOdds(bet.odds) }}
                  </span>
                  <div>
                    <span class="fs-seven d-block fw-medium">{{ bet.betOption }}</span>
                    <span class="fs-nine d-block text-muted">{{ bet.betType.replace('_', ' ') }}</span>
                  </div>
                </div>
                <div v-if="bet.league" class="fs-nine text-muted">{{ bet.league }}</div>
              </div>
              
              <!-- Slip Summary -->
              <div class="px-4 py-2 bg-light mb-3">
                <div class="d-flex justify-content-between mb-1">
                  <span class="fs-seven">Total Odds:</span>
                  <span class="fs-seven fw-bold">{{ formatOdds(bettingSlips[slipType].totalOdds) }}</span>
                </div>
                <div class="d-flex justify-content-between">
                  <span class="fs-seven">Selections:</span>
                  <span class="fs-seven">{{ bettingSlips[slipType].bets.length }}</span>
                </div>
              </div>
            </div>
            
            <div v-else class="px-4 py-5 text-center">
              <p class="fs-seven text-muted mb-2">No bets added to {{ slipType.toLowerCase() }} slip</p>
              <small class="fs-nine text-muted">
                {{ slipType === 'Single' ? 'Add one bet to get started' : 
                   slipType === 'Multiple' ? 'Add multiple bets to combine odds' :
                   'Add 3+ bets for system betting' }}
              </small>
            </div>

            <!-- Betting Form -->
            <div class="fixed_footer__content-formarea px-4">
              <form @submit.prevent="placeBet">
                <!-- Stake Input -->
                <div class="border-four d-flex align-items-center justify-content-between pe-2 rounded-3 mb-3">
                  <input
                    v-model.number="bettingSlips[slipType].stakeAmount"
                    placeholder="Bet amount"
                    class="place-style"
                    type="number"
                    min="1"
                    :max="userBalance"
                    step="0.01"
                  />
                  <button 
                    @click="setMaxStake"
                    class="cmn-btn p-1 fs-seven fw-normal" 
                    type="button"
                    :disabled="userBalance <= 0"
                  >
                    Max
                  </button>
                </div>
                
                <!-- Quick Stakes -->
                <div class="fixed_footer__content-selectammount d-flex align-items-center justify-content-between mb-3">
                  <span
                    v-for="amount in quickStakes[slipType]"
                    :key="amount"
                    @click="setStakeAmount(amount)"
                    class="fs-seven cpoint py-1 px-3 border-four rounded-2 clickable-active"
                    :class="{ 'active bg-primary text-white': bettingSlips[slipType].stakeAmount === amount }"
                  >
                    ${{ amount }}
                  </span>
                </div>
                
                <!-- Potential Win -->
                <div class="fixed_footer__content-possible d-flex align-items-center justify-content-between gap-2 mb-4">
                  <span class="fs-seven">Possible win</span>
                  <span class="fs-seven fw-bold text-success">
                    {{ formatCurrency(bettingSlips[slipType].potentialWin) }}
                  </span>
                </div>
                
                <!-- Action Buttons -->
                <button 
                  type="submit" 
                  class="cmn-btn px-5 py-3 w-100 mb-3"
                  :disabled="loading || bettingSlips[slipType].bets.length === 0 || bettingSlips[slipType].stakeAmount <= 0"
                >
                  <span v-if="loading">Placing Bet...</span>
                  <span v-else>Place Bet</span>
                </button>
                
                <button
                  @click="bookBet"
                  type="button"
                  class="cmn-btn third-alt px-5 py-3 w-100 mb-4"
                  :disabled="bettingSlips[slipType].bets.length === 0"
                >
                  Book Bet
                </button>
              </form>
            </div>
            
            <!-- Footer Actions -->
            <div class="fixed_footer__content-bottom d-flex align-items-center justify-content-between px-4 py-2">
              <div class="right-border d-flex align-items-center gap-2">
                <IconTrash
                  height="20"
                  width="20"
                  class="n3-color fs-five cpoint"
                  @click="clearSlip"
                  title="Clear slip"
                />
                <span class="n3-color fs-seven cpoint" @click="clearSlip">Clear All</span>
              </div>
              <div class="right-border2 d-flex align-items-center justify-content-end gap-2">
                <IconSettings
                  height="20"
                  width="20"
                  class="n3-color fs-five cpoint"
                />
                <router-link to="/settings" class="n3-color fs-seven">Settings</router-link>
              </div>
            </div>
          </TabPanel>
        </TabPanels>
      </TabGroup>
    </div>
  </div>
</template>

<style scoped>
.rotate-180 {
  transform: rotate(180deg);
  transition: transform 0.3s ease;
}

.clickable-active {
  transition: all 0.2s ease;
  cursor: pointer;
}

.clickable-active:hover {
  background-color: var(--bs-primary);
  color: white;
}

.clickable-active.active {
  background-color: var(--bs-primary) !important;
  color: white !important;
}

.fixed_footer__content-live {
  transition: all 0.2s ease;
}

.fixed_footer__content-live:hover {
  background-color: rgba(0, 0, 0, 0.02);
}

.badge {
  font-size: 0.7rem;
}

.alert {
  font-size: 0.8rem;
  padding: 0.5rem 1rem;
  margin-bottom: 0.5rem;
}

.btn-outline-success {
  font-size: 0.7rem;
  padding: 0.25rem 0.5rem;
}

.bg-light {
  background-color: rgba(0, 0, 0, 0.05) !important;
}

.border-bottom {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1) !important;
}

.text-success {
  color: var(--bs-success) !important;
}

.text-muted {
  color: var(--bs-secondary) !important;
}

.fw-medium {
  font-weight: 500;
}
</style>