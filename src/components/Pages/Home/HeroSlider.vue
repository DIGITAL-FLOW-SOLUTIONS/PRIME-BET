<template>
  <section class="hero_area pb-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 gx-0 gx-sm-4">
          <div class="hero_area__main">
            <div class="row w-100">
              <div class="col-12">
                <div class="live-playing">
                  <div class="hero_area__topslider swiper-wrapper">
                    <swiper
                      class="slider_hero"
                      :loop="true"
                      :speed="5000"
                      :autoplay="{ delay: 0 }"
                      :modules="[Autoplay]"
                      :breakpoints="{
                        0: { slidesPerView: 1 },
                        480: { slidesPerView: 1.5, spaceBetween: 20 },
                        575: { slidesPerView: 2, spaceBetween: 20 },
                        991: { slidesPerView: 2, spaceBetween: 20 },
                        1499: { slidesPerView: 3, spaceBetween: 24 },
                        1799: { slidesPerView: 3.5, spaceBetween: 24 }
                      }"
                    >
                      <swiper-slide v-for="(match, index) in matches" :key="index">
                        <div class="hero_area__topslider-card swiper-slide p-4 p-md-6">
                          <!-- League & Time -->
                          <div class="hero_area__topslider-cardtop d-flex align-items-center justify-content-between mb-4 mb-md-6">
                            <div class="d-flex align-items-center gap-2">
                              <IconBallFootball size="24" class="n5-color" />
                              <span class="fs-seven n5-color cpoint">{{ match.league }}</span>
                            </div>
                            <span class="fs-seven n5-color cpoint">{{ match.time }}</span>
                          </div>

                          <!-- Teams -->
                          <div class="hero_area__topslider-cardbody d-flex align-items-center justify-content-between mb-4 mb-md-6">
                            <div class="hero_area__topslider-flag">
                              <div class="hero_area__topslider-flagbox mb-2">
                                <img width="40" height="40" :src="match.homeLogo" :alt="match.homeTeam" />
                              </div>
                              <h6 class="cpoint">{{ match.homeTeam }}</h6>
                            </div>
                            <div class="hero_area__topslider-vs">
                              <span class="fw-bold n5-color">VS</span>
                            </div>
                            <div class="hero_area__topslider-flag text-end">
                              <div class="hero_area__topslider-flagbox mb-2">
                                <img width="40" height="40" :src="match.awayLogo" :alt="match.awayTeam" />
                              </div>
                              <h6 class="cpoint">{{ match.awayTeam }}</h6>
                            </div>
                          </div>

                          <!-- Odds -->
                          <div class="hero_area__topslider-cardfooter d-flex align-items-center justify-content-between gap-4">
                            <div class="hero_area__topslider-cfitem d-flex align-items-center gap-4 py-2 justify-content-center w-100 p2-bg cpoint">
                              <span class="fs-eight n5-color">1</span>
                              <span class="fw-bold fs-eight">{{ match.odds.homeWin }}</span>
                            </div>
                            <div class="hero_area__topslider-cfitem d-flex align-items-center gap-4 py-2 justify-content-center w-100 p2-bg cpoint">
                              <span class="fs-eight n5-color">X</span>
                              <span class="fw-bold fs-eight">{{ match.odds.draw }}</span>
                            </div>
                            <div class="hero_area__topslider-cfitem d-flex align-items-center gap-4 py-2 justify-content-center w-100 p2-bg cpoint">
                              <span class="fs-eight n5-color">2</span>
                              <span class="fw-bold fs-eight">{{ match.odds.awayWin }}</span>
                            </div>
                          </div>
                        </div>
                      </swiper-slide>
                    </swiper>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue';
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";
import "swiper/css";
import { IconBallFootball } from "@tabler/icons-vue";

// Define the Match type
interface Match {
  id: number;
  league: string;
  time: string;
  homeTeam: string;
  awayTeam: string;
  homeLogo: string;
  awayLogo: string;
  odds: {
    homeWin: number;
    draw: number;
    awayWin: number;
  };
}

// Initialize with the Match type
const matches = ref<Match[]>([]);

// Fetch data from PHP API
const fetchMatches = async () => {
  try {
    const response = await fetch('http://localhost/primebet/api/matches.php');
    const data = await response.json();
    matches.value = data.matches as Match[]; // Type assertion
  } catch (error) {
    console.error("Failed to fetch matches:", error);
  }
};

onMounted(() => {
  fetchMatches();
});
</script>

<style scoped>
/* Your existing styles remain unchanged */
</style>