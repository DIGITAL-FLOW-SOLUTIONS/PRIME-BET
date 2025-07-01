<template>
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
                  <img :src="king" width="{32}" height="{32}" alt="Icon" />
                  <h3>Top Soccer</h3>
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
                      chart,
                      star,
                    } in iceHockeyMatch"
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
                              class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                            >
                              <span class="fs-eight cpoint me-6">{{
                                times
                              }}</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
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
                              <div class="d-flex flex-column gap-5">
                                <img
                                  class="cpoint"
                                  :src="chart"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                                <img
                                  class="cpoint visually-hidden"
                                  :src="star"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                              </div>
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
                                    <span class="fs-eight"
                                      >Winner (incl. overtime)</span
                                    >
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight"
                                      >Handicap (incl. overtime)</span
                                    >
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight"
                                      >Total (incl overtime)</span
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
                                        class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >1</span
                                        >
                                        <span
                                          class="fw-bold d-block text-nowrap"
                                          >1.39</span
                                        >
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >2</span
                                        >
                                        <span
                                          class="fw-bold d-block text-nowrap"
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
                                        class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >(7.5) 1</span
                                        >
                                        <span
                                          class="fw-bold d-block text-nowrap"
                                          >1.39</span
                                        >
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >(-7.5) 1</span
                                        >
                                        <span class="fw-bold d-block"
                                          >3.45</span
                                        >
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >(50) 1</span
                                        >
                                        <span class="fw-bold d-block"
                                          >2.28</span
                                        >
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >(-7.5) 1</span
                                        >
                                        <span class="fw-bold d-block"
                                          >2.28</span
                                        >
                                      </div>
                                    </div>
                                  </td>
                                  <td class="pt-4">
                                    <div
                                      class="top_matches__innercount d-flex align-items-center gap-2"
                                    >
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >(-1.5) 1</span
                                        >
                                        <span
                                          class="fw-bold d-block text-nowrap"
                                          >2.28</span
                                        >
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >(5) 1</span
                                        >
                                        <span
                                          class="fw-bold d-block text-nowrap"
                                          >2.28</span
                                        >
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >over 3.0</span
                                        >
                                        <span
                                          class="fw-bold d-block text-nowrap"
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
import { iceHockeyMatch } from "../../../assets/data/tabOne";
import king from "@/assets/images/icon/king.png";
</script>

<style scoped></style>
