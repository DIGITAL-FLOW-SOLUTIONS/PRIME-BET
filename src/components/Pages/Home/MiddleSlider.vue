<template>
  <section class="top_matches py-6">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 gx-0 gx-sm-4">
          <div class="top_matches__main">
            <div class="row w-100">
              <div class="col-12">
                <div class="live-playing2">
                  <div class="hero_area__topslider swiper-wrapper">
                    <swiper
                      class="slider_hero"
                      loop
                      :speed="5000"
                      :autoplay="{
                        delay: 0,
                      }"
                      :modules="[Autoplay]"
                      :breakpoints="{
                        0: {
                          slidesPerView: 1,
                        },
                        480: {
                          slidesPerView: 1.5,
                          spaceBetween: 20,
                        },
                        575: {
                          slidesPerView: 2,
                          spaceBetween: 20,
                        },
                        991: {
                          slidesPerView: 2,
                          spaceBetween: 20,
                        },
                        1499: {
                          slidesPerView: 3,
                          spaceBetween: 24,
                        },
                        1799: {
                          slidesPerView: 3.5,
                          spaceBetween: 24,
                        },
                      }"
                    >
                      <swiper-slide>
                        <div
                          class="hero_area__topslider-card swiper-slide p-4 p-md-6"
                        >
                          <div
                            class="hero_area__topslider-cardtop text-center mb-4 mb-md-6"
                          >
                            <span class="fs-ten d-block mb-1"
                              >Stamford Bridge</span
                            >
                            <span class="n3-color cpoint">Week 10</span>
                          </div>
                          <div
                            class="hero_area__topslider-cardbody d-flex align-items-center justify-content-between mb-4 mb-md-6"
                          >
                            <div
                              class="hero_area__topslider-flag d-center flex-column"
                            >
                              <img
                                class="mb-2"
                                :src="chelsea"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                            <div class="hero_area__topslider-scr">
                              <h3 class="mb-2">1 : 1</h3>
                              <span class="fs-seven py-1 px-2 rounded-5 cpoint"
                                >90+4</span
                              >
                            </div>
                            <div
                              class="hero_area__topslider-flag text-end d-flex flex-column justify-content-center align-items-center"
                            >
                              <img
                                class="mb-2"
                                :src="manUtd"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                          </div>
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                        <div
                          class="hero_area__topslider-card swiper-slide p-4 p-md-6"
                        >
                          <div
                            class="hero_area__topslider-cardtop text-center mb-4 mb-md-6"
                          >
                            <span class="fs-ten d-block mb-1"
                              >Stamford Bridge</span
                            >
                            <span class="n3-color cpoint">Week 10</span>
                          </div>
                          <div
                            class="hero_area__topslider-cardbody d-flex align-items-center justify-content-between mb-4 mb-md-6"
                          >
                            <div
                              class="hero_area__topslider-flag d-center flex-column"
                            >
                              <img
                                class="mb-2"
                                :src="chelsea"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                            <div class="hero_area__topslider-scr">
                              <h3 class="mb-2">1 : 1</h3>
                              <span class="fs-seven py-1 px-2 rounded-5 cpoint"
                                >90+4</span
                              >
                            </div>
                            <div
                              class="hero_area__topslider-flag text-end d-flex flex-column justify-content-center align-items-center"
                            >
                              <img
                                class="mb-2"
                                :src="manUtd"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                          </div>
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                        <div
                          class="hero_area__topslider-card swiper-slide p-4 p-md-6"
                        >
                          <div
                            class="hero_area__topslider-cardtop text-center mb-4 mb-md-6"
                          >
                            <span class="fs-ten d-block mb-1"
                              >Stamford Bridge</span
                            >
                            <span class="n3-color cpoint">Week 10</span>
                          </div>
                          <div
                            class="hero_area__topslider-cardbody d-flex align-items-center justify-content-between mb-4 mb-md-6"
                          >
                            <div
                              class="hero_area__topslider-flag d-center flex-column"
                            >
                              <img
                                class="mb-2"
                                :src="chelsea"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                            <div class="hero_area__topslider-scr">
                              <h3 class="mb-2">1 : 1</h3>
                              <span class="fs-seven py-1 px-2 rounded-5 cpoint"
                                >90+4</span
                              >
                            </div>
                            <div
                              class="hero_area__topslider-flag text-end d-flex flex-column justify-content-center align-items-center"
                            >
                              <img
                                class="mb-2"
                                :src="manUtd"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                          </div>
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                        <div
                          class="hero_area__topslider-card swiper-slide p-4 p-md-6"
                        >
                          <div
                            class="hero_area__topslider-cardtop text-center mb-4 mb-md-6"
                          >
                            <span class="fs-ten d-block mb-1"
                              >Stamford Bridge</span
                            >
                            <span class="n3-color cpoint">Week 10</span>
                          </div>
                          <div
                            class="hero_area__topslider-cardbody d-flex align-items-center justify-content-between mb-4 mb-md-6"
                          >
                            <div
                              class="hero_area__topslider-flag d-center flex-column"
                            >
                              <img
                                class="mb-2"
                                :src="chelsea"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                            <div class="hero_area__topslider-scr">
                              <h3 class="mb-2">1 : 1</h3>
                              <span class="fs-seven py-1 px-2 rounded-5 cpoint"
                                >90+4</span
                              >
                            </div>
                            <div
                              class="hero_area__topslider-flag text-end d-flex flex-column justify-content-center align-items-center"
                            >
                              <img
                                class="mb-2"
                                :src="manUtd"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                          </div>
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                        <div
                          class="hero_area__topslider-card swiper-slide p-4 p-md-6"
                        >
                          <div
                            class="hero_area__topslider-cardtop text-center mb-4 mb-md-6"
                          >
                            <span class="fs-ten d-block mb-1"
                              >Stamford Bridge</span
                            >
                            <span class="n3-color cpoint">Week 10</span>
                          </div>
                          <div
                            class="hero_area__topslider-cardbody d-flex align-items-center justify-content-between mb-4 mb-md-6"
                          >
                            <div
                              class="hero_area__topslider-flag d-center flex-column"
                            >
                              <img
                                class="mb-2"
                                :src="chelsea"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                            <div class="hero_area__topslider-scr">
                              <h3 class="mb-2">1 : 1</h3>
                              <span class="fs-seven py-1 px-2 rounded-5 cpoint"
                                >90+4</span
                              >
                            </div>
                            <div
                              class="hero_area__topslider-flag text-end d-flex flex-column justify-content-center align-items-center"
                            >
                              <img
                                class="mb-2"
                                :src="manUtd"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                          </div>
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                        <div
                          class="hero_area__topslider-card swiper-slide p-4 p-md-6"
                        >
                          <div
                            class="hero_area__topslider-cardtop text-center mb-4 mb-md-6"
                          >
                            <span class="fs-ten d-block mb-1"
                              >Stamford Bridge</span
                            >
                            <span class="n3-color cpoint">Week 10</span>
                          </div>
                          <div
                            class="hero_area__topslider-cardbody d-flex align-items-center justify-content-between mb-4 mb-md-6"
                          >
                            <div
                              class="hero_area__topslider-flag d-center flex-column"
                            >
                              <img
                                class="mb-2"
                                :src="chelsea"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                            <div class="hero_area__topslider-scr">
                              <h3 class="mb-2">1 : 1</h3>
                              <span class="fs-seven py-1 px-2 rounded-5 cpoint"
                                >90+4</span
                              >
                            </div>
                            <div
                              class="hero_area__topslider-flag text-end d-flex flex-column justify-content-center align-items-center"
                            >
                              <img
                                class="mb-2"
                                :src="manUtd"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                          </div>
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                        <div
                          class="hero_area__topslider-card swiper-slide p-4 p-md-6"
                        >
                          <div
                            class="hero_area__topslider-cardtop text-center mb-4 mb-md-6"
                          >
                            <span class="fs-ten d-block mb-1"
                              >Stamford Bridge</span
                            >
                            <span class="n3-color cpoint">Week 10</span>
                          </div>
                          <div
                            class="hero_area__topslider-cardbody d-flex align-items-center justify-content-between mb-4 mb-md-6"
                          >
                            <div
                              class="hero_area__topslider-flag d-center flex-column"
                            >
                              <img
                                class="mb-2"
                                :src="chelsea"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                            <div class="hero_area__topslider-scr">
                              <h3 class="mb-2">1 : 1</h3>
                              <span class="fs-seven py-1 px-2 rounded-5 cpoint"
                                >90+4</span
                              >
                            </div>
                            <div
                              class="hero_area__topslider-flag text-end d-flex flex-column justify-content-center align-items-center"
                            >
                              <img
                                class="mb-2"
                                :src="manUtd"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                          </div>
                        </div>
                      </swiper-slide>
                      <swiper-slide>
                        <div
                          class="hero_area__topslider-card swiper-slide p-4 p-md-6"
                        >
                          <div
                            class="hero_area__topslider-cardtop text-center mb-4 mb-md-6"
                          >
                            <span class="fs-ten d-block mb-1"
                              >Stamford Bridge</span
                            >
                            <span class="n3-color cpoint">Week 10</span>
                          </div>
                          <div
                            class="hero_area__topslider-cardbody d-flex align-items-center justify-content-between mb-4 mb-md-6"
                          >
                            <div
                              class="hero_area__topslider-flag d-center flex-column"
                            >
                              <img
                                class="mb-2"
                                :src="chelsea"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
                            </div>
                            <div class="hero_area__topslider-scr">
                              <h3 class="mb-2">1 : 1</h3>
                              <span class="fs-seven py-1 px-2 rounded-5 cpoint"
                                >90+4</span
                              >
                            </div>
                            <div
                              class="hero_area__topslider-flag text-end d-flex flex-column justify-content-center align-items-center"
                            >
                              <img
                                class="mb-2"
                                :src="manUtd"
                                width="{64}"
                                height="{64}"
                                alt="Icon"
                              />
                              <span class="cpoint fs-seven mb-1">Man Utd</span>
                              <span class="n3-color fs-eight">Away</span>
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
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";
import "swiper/css";

import chelsea from "@/assets/images/icon/chelsea.png";
import manUtd from "@/assets/images/icon/man-utd.png";
</script>

<style scoped></style>
