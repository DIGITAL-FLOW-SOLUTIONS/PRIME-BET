<template>
  <div>
    <section class="top_matches">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 gx-0 gx-sm-4">
            <div class="top_matches__main pt-20">
              <div class="row w-100 pt-md-5">
                <div class="col-12">
                  <div
                    class="top_matches__title d-flex align-items-center gap-2 mb-4 mb-md-5"
                  >
                    <img
                      :src="liveMatch"
                      width="{32}"
                      height="{32}"
                      alt="Icon"
                    />
                    <h3>Live Matches</h3>
                  </div>
                  <div class="top_matches__content">
                    <div
                      class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                      v-for="{
                        id,
                        updown,
                        tShart,
                        basketball,
                        titletwo,
                        clubone,
                        clubtwo,
                        clubNameOne,
                        clubNameTwo,
                      } in liveIceHockeyMatch"
                      :key="id"
                    >
                      <div class="row gx-0 gy-xl-0 gy-7">
                        <div class="col-xl-5 col-xxl-4">
                          <div class="top_matches__clubname">
                            <div
                              class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                            >
                              <div class="d-flex align-items-center gap-1">
                                <img
                                  :src="basketball"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                                <span class="fs-eight cpoint">{{
                                  titletwo
                                }}</span>
                              </div>
                              <div
                                class="d-flex align-items-center gap-2 pe-xl-15 flex-nowrap flex-xl-wrap me-6"
                              >
                                <img
                                  :src="updown"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                                <img
                                  :src="tShart"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                                <span class="fs-eight cpoint">6′ 2nd half</span>
                              </div>
                            </div>
                            <div
                              class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                            >
                              <div>
                                <div
                                  class="d-flex align-items-center gap-2 mb-4"
                                >
                                  <img
                                    class="rounded-5"
                                    :src="clubone"
                                    width="{24}"
                                    height="{24}"
                                    alt="Icon"
                                  />
                                  <span class="fs-seven cpoint">{{
                                    clubNameOne
                                  }}</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                  <img
                                    :src="clubtwo"
                                    width="{24}"
                                    height="{24}"
                                    alt="Icon"
                                  />
                                  <span class="fs-seven cpoint">{{
                                    clubNameTwo
                                  }}</span>
                                </div>
                              </div>
                              <div
                                class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                              >
                                <div class="d-flex flex-column gap-1">
                                  <span
                                    class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                    >2</span
                                  >
                                  <span
                                    class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                    >2</span
                                  >
                                </div>
                                <span
                                  class="v-line lg d-none d-xl-block"
                                ></span>
                                <div class="d-flex flex-column gap-5"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-7 col-xxl-8">
                          <div class="top_matches__clubdata">
                            <div class="table-responsive maintaintwo">
                              <table class="table mb-0 pb-0">
                                <thead>
                                  <tr class="text-center">
                                    <th scope="col">
                                      <span class="fs-eight">1x2</span>
                                    </th>
                                    <th scope="col">
                                      <span class="fs-eight">Total</span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="pt-4">
                                      <div
                                        class="top_matches__innercount d-flex align-items-center gap-2"
                                      >
                                        <div
                                          class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                        >
                                          <span class="fs-seven d-block mb-2"
                                            >draw</span
                                          >
                                          <span class="fw-bold d-block"
                                            >3.45</span
                                          >
                                        </div>
                                        <div
                                          class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                        >
                                          <span class="fs-seven d-block mb-2"
                                            >draw</span
                                          >
                                          <span class="fw-bold d-block"
                                            >3.45</span
                                          >
                                        </div>
                                        <div
                                          class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                        >
                                          <span class="fs-seven d-block mb-2"
                                            >draw</span
                                          >
                                          <span class="fw-bold d-block"
                                            >3.45</span
                                          >
                                        </div>
                                      </div>
                                    </td>
                                    <td class="pt-4">
                                      <div
                                        class="top_matches__innercount d-flex align-items-center gap-2"
                                      >
                                        <div
                                          class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                        >
                                          <span class="fs-seven d-block mb-2"
                                            >draw</span
                                          >
                                          <span class="fw-bold d-block"
                                            >3.45</span
                                          >
                                        </div>
                                        <div
                                          class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                        >
                                          <span class="fs-seven d-block mb-2"
                                            >draw</span
                                          >
                                          <span class="fw-bold d-block"
                                            >3.45</span
                                          >
                                        </div>
                                        <div
                                          class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                        >
                                          <span class="fs-seven d-block mb-2"
                                            >draw</span
                                          >
                                          <span class="fw-bold d-block"
                                            >3.45</span
                                          >
                                        </div>
                                        <div
                                          class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                        >
                                          <span class="fs-seven d-block mb-2"
                                            >draw</span
                                          >
                                          <span class="fw-bold d-block"
                                            >3.45</span
                                          >
                                        </div>
                                        <div
                                          class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                        >
                                          <span class="fs-seven d-block mb-2"
                                            >draw</span
                                          >
                                          <span class="fw-bold d-block"
                                            >3.45</span
                                          >
                                        </div>
                                        <div
                                          class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                        >
                                          <span class="fs-seven d-block mb-2"
                                            >draw</span
                                          >
                                          <span class="fw-bold d-block"
                                            >3.45</span
                                          >
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <UpCmingNba2k />
  </div>
</template>

<script setup lang="ts">
import { liveIceHockeyMatch } from "../assets/data/tabTwo";
import UpCmingNba2k from "../components/Pages/Nba2k/UpCmingNba2k.vue";
import liveMatch from "@/assets/images/icon/live-match.png";
</script>

<style scoped></style>
