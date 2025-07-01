<script setup lang="ts">
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from "@headlessui/vue";
import {
  IconBellRinging,
  IconCreditCard,
  IconHistory,
  IconLogout,
  IconSettings,
  IconUser,
  IconWallet,
} from "@tabler/icons-vue";
import DepositCard from "./DepositCard.vue";
import DepositAmount from "./DepositAmount.vue";
import WithDrawalAmount from "./WithDrawalAmount.vue";
import Notifications from "./Notifications.vue";
import Settings from "./Settings.vue";
import Profile from "./Profile.vue";
import { useRouter } from 'vue-router';
import { ref } from 'vue';

const router = useRouter();
const isLoggingOut = ref(false);

const handleLogout = async (event: Event) => {
  // Prevent the tab from being selected
  event.preventDefault();
  event.stopPropagation();
  
  if (isLoggingOut.value) return;
  
  isLoggingOut.value = true;
  
  try {
    // Clear local storage first (with error handling)
    try {
      localStorage.removeItem('userId');
      localStorage.clear();
      sessionStorage.clear();
    } catch (storageError) {
      console.warn('Storage clearing failed:', storageError);
    }
    
    // Try to call logout API with proper error handling
    try {
      await fetch('http://localhost/primebet/api/logout.php', {
        method: 'POST',
        credentials: 'include',
        headers: {
          'Content-Type': 'application/json',
        },
      });
    } catch (apiError) {
      console.warn('Logout API call failed, but continuing with client-side logout:', apiError);
    }
    
    // Use Vue Router for navigation instead of window.location
    await router.push('/login');
    
  } catch (error) {
    console.error('Logout error:', error);
    // Fallback to router navigation
    try {
      await router.push('/login');
    } catch (routerError) {
      // Final fallback to window.location if router fails
      window.location.href = '/login';
    }
  } finally {
    isLoggingOut.value = false;
  }
};
</script>

<template>
  <section class="pay_method pb-120 overflow-visible">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 gx-0 gx-sm-4">
          <div class="hero_area__main">
            <TabGroup>
              <div class="row gy-6 gy-xxl-0 singletab">
                <div class="col-xxl-3">
                  <div class="pay_method__scrol">
                    <TabList
                      class="tablinks pay_method__scrollbar p2-bg p-5 p-md-6 rounded-4 d-flex flex-wrap align-items-center justify-content-center flex-xxl-column gap-3 gap-xxl-2"
                    >
                      <Tab
                        as="template"
                        v-slot="{ selected }"
                        class="nav-links p-3 rounded-3 cpoint d-inline-block outstles"
                      >
                        <button
                          class="tablink d-flex align-items-center gap-2 outstles"
                          :class="{
                            'n11-bg': selected,
                          }"
                        >
                          <IconWallet
                            class="fs-five n5-color"
                            height="20"
                            width="20"
                          />
                          Deposit
                        </button>
                      </Tab>
                      <Tab
                        as="template"
                        v-slot="{ selected }"
                        class="nav-links p-3 rounded-3 cpoint d-inline-block outstles"
                      >
                        <button
                          class="tablink d-flex align-items-center gap-2 outstles"
                          :class="{
                            'n11-bg': selected,
                          }"
                        >
                          <IconCreditCard
                            class="fs-five n5-color"
                            height="20"
                            width="20"
                          />
                          Withdrawal
                        </button>
                      </Tab>
                      <Tab
                        as="template"
                        v-slot="{ selected }"
                        class="nav-links p-3 rounded-3 cpoint d-inline-block outstles"
                      >
                        <button
                          class="tablink d-flex align-items-center gap-2 outstles"
                          :class="{
                            'n11-bg': selected,
                          }"
                        >
                          <IconHistory
                            class="fs-five n5-color"
                            height="20"
                            width="20"
                          />
                          Cancel withdrawal
                        </button>
                      </Tab>
                      <Tab
                        as="template"
                        v-slot="{ selected }"
                        class="nav-links p-3 rounded-3 cpoint d-inline-block outstles"
                      >
                        <button
                          class="tablink d-flex align-items-center gap-2 outstles"
                          :class="{
                            'n11-bg': selected,
                          }"
                        >
                          <IconUser
                            class="fs-five n5-color"
                            height="20"
                            width="20"
                          />
                          Balance History
                        </button>
                      </Tab>
                      <Tab
                        as="template"
                        v-slot="{ selected }"
                        class="nav-links p-3 rounded-3 cpoint d-inline-block outstles"
                      >
                        <button
                          class="tablink d-flex align-items-center gap-2 outstles"
                          :class="{
                            'n11-bg': selected,
                          }"
                        >
                          <IconSettings
                            class="fs-five n5-color"
                            height="20"
                            width="20"
                          />
                          Profile
                        </button>
                      </Tab>
                      <Tab
                        as="template"
                        v-slot="{ selected }"
                        class="nav-links p-3 rounded-3 cpoint d-inline-block outstles"
                      >
                        <button
                          class="tablink d-flex align-items-center gap-2 outstles"
                          :class="{
                            'n11-bg': selected,
                          }"
                        >
                          <IconBellRinging
                            class="fs-five n5-color"
                            height="20"
                            width="20"
                          />
                          Settings
                        </button>
                      </Tab>
                      <Tab
                        as="template"
                        v-slot="{ selected }"
                        class="nav-links p-3 rounded-3 cpoint d-inline-block outstles"
                      >
                        <button
                          class="tablink d-flex align-items-center gap-2 outstles"
                          :class="{
                            'n11-bg': selected,
                          }"
                        >
                          <IconBellRinging
                            class="fs-five n5-color"
                            height="20"
                            width="20"
                          />
                          Notifications
                        </button>
                      </Tab>
                      <!-- Logout button - separate from Tab component -->
                      <div class="nav-links p-3 rounded-3 cpoint d-inline-block outstles">
                        <button
                          @click="handleLogout"
                          class="tablink d-flex align-items-center gap-2 outstles"
                          :disabled="isLoggingOut"
                        >
                          <IconLogout
                            class="fs-five n5-color"
                            height="20"
                            width="20"
                          />
                          {{ isLoggingOut ? 'Logging out...' : 'Log out' }}
                        </button>
                      </div>
                    </TabList>
                  </div>
                </div>
                <div class="col-xxl-9">
                  <TabPanels class="tabcontents">
                    <TabPanel>
                      <div
                        class="pay_method__paymethod p-4 p-lg-6 p2-bg rounded-8 mb-8 mb-md-10"
                      >
                        <div
                          class="pay_method__paymethod-title d-flex align-items-center gap-3 mb-6 mb-md-8"
                        >
                          <i class="ti ti-credit-card fs-four g1-color"></i>
                          <h5 class="n10-color">Payment methods</h5>
                        </div>
                        <div class="pay_method__paymethod-alitem">
                          <div class="row gx-4 gy-4">
                            <DepositCard />
                          </div>
                        </div>
                      </div>
                      <DepositAmount />
                    </TabPanel>
                    <TabPanel>
                      <div
                        class="pay_method__paymethod p-4 p-lg-6 p2-bg rounded-8 mb-8 mb-md-10"
                      >
                        <div
                          class="pay_method__paymethod-title d-flex align-items-center gap-3 mb-6 mb-md-8"
                        >
                          <i class="ti ti-credit-card fs-four g1-color"></i>
                          <h5 class="n10-color">Payment methods</h5>
                        </div>
                        <div class="pay_method__paymethod-alitem">
                          <div class="row gx-4 gy-4">
                            <DepositCard />
                          </div>
                        </div>
                      </div>
                      <div
                        class="pay_method__paymethod p-4 p-lg-6 p2-bg rounded-8"
                      >
                        <div class="pay_method__paymethod-title mb-5 mb-md-6">
                          <h5 class="n10-color">
                            Choose or enter your withdrawal amount
                          </h5>
                        </div>
                        <div
                          class="pay_method__amount d-flex align-content-center justify-content-between py-3 px-5 px-md-6 mb-6 mb-md-8 flex-wrap gap-3"
                        >
                          <div class="pay_method__amount-actual">
                            <span class="fs-seven mb-3">Actual balance</span>
                            <div class="d-flex align-items-center gap-3">
                              <span class="fw-bol">$ 7.000</span>
                              <i class="ti ti-refresh fs-seven cpoint"></i>
                            </div>
                          </div>
                          <span class="v-line lgx d-none d-sm-block"></span>
                          <div class="pay_method__amount-sports">
                            <span class="fs-seven mb-3">Bonus No Sports</span>
                            <span class="fw-bol d-block">$ 0.00</span>
                          </div>
                          <span class="v-line lgx d-none d-sm-block"></span>
                          <div class="pay_method__amount-sports">
                            <span class="fs-seven mb-3">Bonus in casino</span>
                            <span class="fw-bol d-block">$ 0.00</span>
                          </div>
                        </div>
                        <WithDrawalAmount />
                      </div>
                    </TabPanel>
                    <TabPanel>
                      <div class="pay_method__table">
                        <div
                          class="pay_method__table-scrollbar overflow-x-auto"
                        >
                          <table class="w-100 text-center p2-bg">
                            <tr>
                              <th class="text-nowrap">Transaction ID</th>
                              <th class="text-nowrap">Payment Methods</th>
                              <th class="text-nowrap">Amount</th>
                              <th class="text-nowrap">Status</th>
                            </tr>
                            <tr>
                              <td>2PQ8B4KYMJ</td>
                              <td>Bank / CC</td>
                              <td>5,591 USD</td>
                              <td class="r1-color fw-normal cpoint">Cancel</td>
                            </tr>
                            <tr>
                              <td>4TQRW5WXF4</td>
                              <td>Credit Card</td>
                              <td>5,591 USD</td>
                              <td class="g1-color fw-normal cpoint">
                                Complete
                              </td>
                            </tr>
                            <tr>
                              <td>XR97K86R7Y</td>
                              <td>tether TRC20</td>
                              <td>5,591 USD</td>
                              <td class="r1-color fw-normal cpoint">Cancel</td>
                            </tr>
                            <tr>
                              <td>VEJP8A5J87</td>
                              <td>Bank</td>
                              <td>5,591 USD</td>
                              <td class="g1-color fw-normal cpoint">
                                Complete
                              </td>
                            </tr>
                            <tr>
                              <td>JKNFWEJ123</td>
                              <td>Credit Card</td>
                              <td>5,591 USD</td>
                              <td class="r1-color fw-normal cpoint">Cancel</td>
                            </tr>
                            <tr>
                              <td>NC8S4QJ4K2</td>
                              <td>tether TRC20</td>
                              <td>5,591 USD</td>
                              <td class="r1-color fw-normal cpoint">Cancel</td>
                            </tr>
                            <tr>
                              <td>DGPSN7SRM4</td>
                              <td>TRON</td>
                              <td>5,591 USD</td>
                              <td class="g1-color fw-normal cpoint">
                                Complete
                              </td>
                            </tr>
                            <tr>
                              <td>ZT3FA5D8N7</td>
                              <td>Ethereum</td>
                              <td>5,591 USD</td>
                              <td class="g1-color fw-normal cpoint">
                                Complete
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </TabPanel>
                    <TabPanel>
                      <div class="pay_method__tabletwo">
                        <div
                          class="pay_method__table-scrollbar overflow-x-auto"
                        >
                          <table class="w-100 text-center p2-bg">
                            <tr>
                              <th class="text-nowrap">Transaction ID</th>
                              <th class="text-nowrap">Date</th>
                              <th class="text-nowrap">Transaction type</th>
                              <th class="text-nowrap">Amount/Balance</th>
                              <th class="text-nowrap">Status</th>
                            </tr>
                            <tr>
                              <td class="text-nowrap">2PQ8B4KYMJ</td>
                              <td class="text-nowrap">27.12.2023, 11:31</td>
                              <td class="text-nowrap">5,591 USD</td>
                              <td class="text-nowrap">300.00/300.00</td>
                              <td class="g1-color fw-normal cpoint text-nowrap">
                                Complete
                              </td>
                            </tr>
                            <tr>
                              <td class="text-nowrap">4TQRW5WXF4</td>
                              <td class="text-nowrap">27.12.2023, 11:31</td>
                              <td class="text-nowrap">5,591 USD</td>
                              <td class="text-nowrap">300.00/300.00</td>
                              <td class="g1-color fw-normal cpoint text-nowrap">
                                Complete
                              </td>
                            </tr>
                            <tr>
                              <td class="text-nowrap">4TQRW5WXF4</td>
                              <td class="text-nowrap">27.12.2023, 11:31</td>
                              <td class="text-nowrap">5,591 USD</td>
                              <td class="text-nowrap">300.00/300.00</td>
                              <td class="g1-color fw-normal cpoint text-nowrap">
                                Complete
                              </td>
                            </tr>
                            <tr>
                              <td class="text-nowrap">VEJP8A5J87</td>
                              <td class="text-nowrap">27.12.2023, 11:31</td>
                              <td class="text-nowrap">5,591 USD</td>
                              <td class="text-nowrap">300.00/300.00</td>
                              <td class="g1-color fw-normal cpoint text-nowrap">
                                Complete
                              </td>
                            </tr>
                            <tr>
                              <td class="text-nowrap">JKNFWEJ123</td>
                              <td class="text-nowrap">27.12.2023, 11:31</td>
                              <td class="text-nowrap">5,591 USD</td>
                              <td class="text-nowrap">300.00/300.00</td>
                              <td class="g1-color fw-normal cpoint text-nowrap">
                                Complete
                              </td>
                            </tr>
                            <tr>
                              <td class="text-nowrap">NC8S4QJ4K2</td>
                              <td class="text-nowrap">27.12.2023, 11:31</td>
                              <td class="text-nowrap">5,591 USD</td>
                              <td class="text-nowrap">300.00/300.00</td>
                              <td class="g1-color fw-normal cpoint text-nowrap">
                                Complete
                              </td>
                            </tr>
                            <tr>
                              <td class="text-nowrap">DGPSN7SRM4</td>
                              <td class="text-nowrap">27.12.2023, 11:31</td>
                              <td class="text-nowrap">5,591 USD</td>
                              <td class="text-nowrap">300.00/300.00</td>
                              <td class="g1-color fw-normal cpoint text-nowrap">
                                Complete
                              </td>
                            </tr>
                            <tr>
                              <td class="text-nowrap">ZT3FA5D8N7</td>
                              <td class="text-nowrap">27.12.2023, 11:31</td>
                              <td class="text-nowrap">5,591 USD</td>
                              <td class="text-nowrap">300.00/300.00</td>
                              <td class="g1-color fw-normal cpoint text-nowrap">
                                Complete
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </TabPanel>
                    <TabPanel>
                      <Profile />
                    </TabPanel>
                    <TabPanel>
                      <Settings />
                    </TabPanel>
                    <TabPanel>
                      <Notifications />
                    </TabPanel>
                  </TabPanels>
                </div>
              </div>
            </TabGroup>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped></style>