<template>
  <section class="top_matches">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 gx-0 gx-sm-4">
          <div class="top_matches__main">
            <div class="row w-100 mb-8 mb-md-10">
              <div class="col-12">
                <div
                  class="top_matches__title d-flex align-items-center gap-2 mb-4 mb-md-6"
                >
                  <img :src="clock" width="{32}" height="{32}" alt="Icon" />
                  <h3>Upcoming Events</h3>
                </div>
                <div class="top_matches__content">
                  <div
                    class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                    v-for="{
                      id,
                      basketball,
                      titletwo,
                      times,
                      clubone,
                      clubtwo,
                      clubNameOne,
                      clubNameTwo,
                    } in eCricketUpCE"
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
                              class="d-flex align-items-center gap-2 pe-xl-15 flex-nowrap flex-xl-wrap"
                            >
                              <span class="fs-eight cpoint">{{ times }}</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
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
                              <span
                                class="v-line lg d-none d-xl-block mb-15"
                              ></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-7 col-xxl-8">
                        <div class="top_matches__clubdata">
                          <div class="table-responsive">
                            <table class="table mb-0 pb-0">
                              <thead>
                                <tr class="text-center">
                                  <th scope="col">
                                    <span class="fs-eight">Winner</span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">Total runs</span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight"
                                      >Sri Lanka total</span
                                    >
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
                  <div class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4">
                    <div class="row gx-0 gy-xl-0 gy-7">
                      <div class="col-xl-5 col-xxl-4">
                        <div class="top_matches__clubname">
                          <div
                            class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                          >
                            <div class="d-flex align-items-center gap-1">
                              <img
                                :src="cricket"
                                width="{16}"
                                height="{16}"
                                alt="Icon"
                              />
                              <span class="fs-eight cpoint"
                                >International Euroleague</span
                              >
                            </div>
                            <div
                              class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                            >
                              <span class="fs-eight cpoint">Today, 23:00</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  class="rounded-5"
                                  :src="queensland"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint"
                                  >Queensland Bulls</span
                                >
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  class="rounded-5"
                                  :src="australia"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint"
                                  >Western Australia</span
                                >
                              </div>
                            </div>
                            <div
                              class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                            >
                              <span
                                class="v-line lg d-none d-xl-block mb-15"
                              ></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-7 col-xxl-8 d-xl-flex">
                        <div
                          class="top_matches__clubdata top_matches__clubdatatwo"
                        >
                          <div class="table-responsive">
                            <table class="table mb-0 pb-0">
                              <thead>
                                <tr class="text-center">
                                  <th scope="col">
                                    <span class="fs-eight">Draw no bet </span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">First innings</span>
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
                                        <span
                                          class="fs-seven text-center d-block mb-2"
                                          >1</span
                                        >
                                        <span class="fw-bold d-block">1.5</span>
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                      >
                                        <span
                                          class="fs-seven text-center d-block mb-2"
                                          >2</span
                                        >
                                        <span class="fw-bold d-block">3.8</span>
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
                                        <span
                                          class="fs-seven text-center d-block mb-2"
                                          >1</span
                                        >
                                        <span class="fw-bold d-block"
                                          >1.39</span
                                        >
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                      >
                                        <span
                                          class="fs-seven text-center d-block mb-2"
                                          >2</span
                                        >
                                        <span class="fw-bold d-block"
                                          >2.85</span
                                        >
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                      >
                                        <span
                                          class="fs-seven text-center d-block mb-2"
                                          >2</span
                                        >
                                        <span class="fw-bold d-block"
                                          >1.39</span
                                        >
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <hr class="w-100 mt-8 d-none d-xl-block n4-color" />
                      </div>
                    </div>
                  </div>
                  <div class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4">
                    <div class="row gx-0 gy-xl-0 gy-7">
                      <div class="col-xl-5 col-xxl-4">
                        <div class="top_matches__clubname">
                          <div
                            class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                          >
                            <div class="d-flex align-items-center gap-1">
                              <img
                                :src="cricket"
                                width="{16}"
                                height="{16}"
                                alt="Icon"
                              />
                              <span class="fs-eight cpoint"
                                >International Euroleague</span
                              >
                            </div>
                            <div
                              class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                            >
                              <span class="fs-eight cpoint">Today, 23:00</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  class="rounded-5"
                                  :src="queensland"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint"
                                  >Queensland Bulls</span
                                >
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  class="rounded-5"
                                  :src="australia"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint"
                                  >Western Australia</span
                                >
                              </div>
                            </div>
                            <div
                              class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                            >
                              <span
                                class="v-line lg d-none d-xl-block mb-15"
                              ></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-7 col-xxl-8 d-xl-flex">
                        <div
                          class="top_matches__clubdata top_matches__clubdatatwo"
                        >
                          <div class="table-responsive maintaintwo">
                            <table class="table mb-0 pb-0">
                              <thead>
                                <tr class="text-center">
                                  <th scope="col">
                                    <span class="fs-eight">Draw no bet </span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">First innings</span>
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
                                        <span
                                          class="fs-seven text-center d-block mb-2"
                                          >1</span
                                        >
                                        <span class="fw-bold d-block">1.5</span>
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                      >
                                        <span
                                          class="fs-seven text-center d-block mb-2"
                                          >2</span
                                        >
                                        <span class="fw-bold d-block">3.8</span>
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
                                        <span
                                          class="fs-seven text-center d-block mb-2"
                                          >1</span
                                        >
                                        <span class="fw-bold d-block"
                                          >1.39</span
                                        >
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                      >
                                        <span
                                          class="fs-seven text-center d-block mb-2"
                                          >2</span
                                        >
                                        <span class="fw-bold d-block"
                                          >2.85</span
                                        >
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                      >
                                        <span
                                          class="fs-seven text-center d-block mb-2"
                                          >2</span
                                        >
                                        <span class="fw-bold d-block"
                                          >1.39</span
                                        >
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <hr class="w-100 mt-8 d-none d-xl-block n4-color" />
                      </div>
                    </div>
                  </div>
                  <div class="top_matches__cmncard p2-bg p-4 rounded-3">
                    <div class="row gx-0 gy-xl-0 gy-7">
                      <div class="col-xl-5 col-xxl-4">
                        <div class="top_matches__clubname">
                          <div
                            class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                          >
                            <div class="d-flex align-items-center gap-1">
                              <img
                                :src="eCricket"
                                width="{16}"
                                height="{16}"
                                alt="Icon"
                              />
                              <span class="fs-eight cpoint"
                                >Men&apos;s World Cup</span
                              >
                            </div>
                            <div
                              class="d-flex align-items-center gap-2 pe-xl-15 flex-nowrap flex-xl-wrap"
                            >
                              <span class="fs-eight cpoint">Today, 23:00</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  class="rounded-5"
                                  :src="nigeria"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Nigeria</span>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  :src="zimbabwe"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Zimbabwe</span>
                              </div>
                            </div>
                            <div
                              class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                            >
                              <span
                                class="v-line lg d-none d-xl-block mb-15"
                              ></span>
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
                                    <span class="fs-eight">Winner</span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">Total runs</span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight"
                                      >Sri Lanka total</span
                                    >
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
</template>

<script setup lang="ts">
import { eCricketUpCE } from "../../../assets/data/tabThree";
import clock from "@/assets/images/icon/clock-icon.png";
import cricket from "@/assets/images/icon/cricket.png";
import eCricket from "@/assets/images/icon/ecricket.png";
import queensland from "@/assets/images/icon/queensland.png";
import australia from "@/assets/images/icon/western-australia.png";

import nigeria from "@/assets/images/icon/nigeria.png";
import zimbabwe from "@/assets/images/icon/zimbabwe.png";
</script>

<style scoped></style>
