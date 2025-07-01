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
                  <img
                    :src="clock"
                    width="{32}"
                    height="{32}"
                    alt="Icon"
                  />
                  <h3>Upcoming Events</h3>
                </div>
                <div class="top_matches__content">
                  <div class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4">
                    <div class="row gx-0 gy-xl-0 gy-7">
                      <div class="col-xl-5 col-xxl-4">
                        <div class="top_matches__clubname">
                          <div
                            class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                          >
                            <div class="d-flex align-items-center gap-1">
                              <img
                                :src="counter"
                                width="{16}"
                                height="{16}"
                                alt="Icon"
                              />
                              <span class="fs-eight cpoint">Copa America</span>
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
                                  :src="hyundai"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Uruguay</span>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  :src="baroda"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Brazil</span>
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
                                    <span class="fs-eight">1x2</span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">Total runs</span>
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
                  <div class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4">
                    <div class="row gx-0 gy-xl-0 gy-7">
                      <div class="col-xl-5 col-xxl-4">
                        <div class="top_matches__clubname">
                          <div
                            class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                          >
                            <div class="d-flex align-items-center gap-1">
                              <img
                                :src="counter"
                                width="{16}"
                                height="{16}"
                                alt="Icon"
                              />
                              <span class="fs-eight cpoint">Copa America</span>
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
                                  :src="borussia"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Brazil</span>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  :src="santos"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Germany</span>
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
                                    <span class="fs-eight">1x2</span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">Total runs</span>
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
                  <div class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4">
                    <div class="row gx-0 gy-xl-0 gy-7">
                      <div class="col-xl-5 col-xxl-4">
                        <div class="top_matches__clubname">
                          <div
                            class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                          >
                            <div class="d-flex align-items-center gap-1">
                              <img
                                :src="counter"
                                width="{16}"
                                height="{16}"
                                alt="Icon"
                              />
                              <span class="fs-eight cpoint">Copa America</span>
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
                                  :src="hyundai"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Uruguay</span>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  :src="baroda"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Brazil</span>
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
                                    <span class="fs-eight">1x2</span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">Total runs</span>
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
</template>

<script setup lang="ts">
import clock from "@/assets/images/icon/clock-icon.png";
import counter from "@/assets/images/icon/counter-strike.png";
import hyundai from "@/assets/images/icon/ulsan-hyundai.png";
import baroda from "@/assets/images/icon/baroda.png";
import borussia from "@/assets/images/icon/borussia-bortmund.png";
import santos from "@/assets/images/icon/santos.png";
</script>

<style scoped></style>
