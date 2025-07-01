<script setup lang="ts">
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from "@headlessui/vue";
import {
  soccerMatch,
  basketballMatch,
  iceHockeyMatch,
  tabOne,
} from "../../../assets/data/tabOne";
import king from "@/assets/images/icon/king.png";
</script>

<template>
  <section class="top_matches">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 gx-0 gx-lg-4">
          <div class="top_matches__main">
            <div class="row w-100">
              <div class="col-12">
                <div
                  class="top_matches__title d-flex align-items-center gap-2 mb-4"
                >
                  <img width="{32}" height="{32}" :src="king" alt="Icon" />
                  <h3>Top Matches</h3>
                </div>
                <div class="top_matches__content">
                  <div class="singletab">
                    <!-- vue tab -->
                    <TabGroup>
                      <TabList
                        class="tablinks d-flex align-items-center gap-4 flex-wrap mb-5 mb-md-6"
                      >
                        <Tab
                          as="template"
                          v-slot="{ selected }"
                          v-for="{ imgSrc, buttonName, id } in tabOne"
                          :key="id"
                        >
                          <button
                            class="tablink clickable-active2 d-flex align-items-center gap-2 py-2 px-4 p3-bg rounded-17"
                            :class="{
                              'border-one': selected,
                              'border-four': !selected,
                            }"
                          >
                            <img
                              width="{16}"
                              height="{16}"
                              :src="imgSrc"
                              alt="Icon"
                            />
                            {{ buttonName }}
                          </button>
                        </Tab>
                      </TabList>
                      <TabPanels>
                        <TabPanel class="tabitem active">
                          <div
                            class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            :key="id"
                            v-for="{
                              id,
                              football,
                              titletwo,
                              times,
                              updown,
                              tShart,
                              x2,
                              douchance,
                              ttl,
                              clubone,
                              clubtwo,
                              clubNameOne,
                              clubNameTwo,
                              chart,
                              star,
                              draw,
                              point,
                            } in soccerMatch"
                          >
                            <div class="row gx-0 gy-xl-0 gy-7">
                              <div class="col-xl-5 col-xxl-4">
                                <div class="top_matches__clubname">
                                  <div
                                    class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                  >
                                    <div
                                      class="d-flex align-items-center gap-1"
                                    >
                                      <img
                                        :src="football"
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint">
                                        {{ titletwo }}
                                      </span>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint">
                                        {{ times }}
                                      </span>
                                      <div
                                        class="d-flex align-items-center gap-1"
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
                                      </div>
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
                                          :src="clubone"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint">
                                          {{ clubNameOne }}
                                        </span>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2"
                                      >
                                        <img
                                          :src="clubtwo"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint">
                                          {{ clubNameTwo }}
                                        </span>
                                      </div>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                    >
                                      <span
                                        class="v-line lg d-none d-xl-block"
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
                                          class="cpoint"
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
                                            <span class="fs-eight">
                                              {{ x2 }}
                                            </span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight">
                                              {{ douchance }}
                                            </span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight">
                                              {{ ttl }}
                                            </span>
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
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  {{ draw }}
                                                </span>
                                                <span class="fw-bold d-block">
                                                  {{ point }}
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  {{ draw }}
                                                </span>
                                                <span class="fw-bold d-block">
                                                  {{ point }}
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  {{ draw }}
                                                </span>
                                                <span class="fw-bold d-block">
                                                  {{ point }}
                                                </span>
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
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  {{ draw }}
                                                </span>
                                                <span class="fw-bold d-block">
                                                  {{ point }}
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  {{ draw }}
                                                </span>
                                                <span class="fw-bold d-block">
                                                  {{ point }}
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  {{ draw }}
                                                </span>
                                                <span class="fw-bold d-block">
                                                  {{ point }}
                                                </span>
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
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  {{ draw }}
                                                </span>
                                                <span class="fw-bold d-block">
                                                  {{ point }}
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  {{ draw }}
                                                </span>
                                                <span class="fw-bold d-block">
                                                  {{ point }}
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  {{ draw }}
                                                </span>
                                                <span class="fw-bold d-block">
                                                  {{ point }}
                                                </span>
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
                        </TabPanel>
                        <TabPanel class="tabitem active">
                          <div
                            class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            :key="id"
                            v-for="{
                              id,
                              football,
                              titletwo,
                              times,
                              clubone,
                              clubtwo,
                              clubNameOne,
                              clubNameTwo,
                              chart,
                              star,
                            } in soccerMatch"
                          >
                            <div class="row gx-0 gy-xl-0 gy-7">
                              <div class="col-xl-5 col-xxl-4">
                                <div class="top_matches__clubname">
                                  <div
                                    class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                  >
                                    <div
                                      class="d-flex align-items-center gap-1"
                                    >
                                      <img
                                        :src="football"
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint">
                                        {{ titletwo }}
                                      </span>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint">
                                        {{ times }}
                                      </span>
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
                                          :src="clubone"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint">
                                          {{ clubNameOne }}
                                        </span>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2"
                                      >
                                        <img
                                          :src="clubtwo"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint">
                                          {{ clubNameTwo }}
                                        </span>
                                      </div>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                    >
                                      <span
                                        class="v-line lg d-none d-xl-block"
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
                                          class="cpoint"
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
                              <div class="col-xl-7 col-xxl-8 d-xl-flex">
                                <div
                                  class="top_matches__clubdata top_matches__clubdatatwo"
                                >
                                  <div class="table-responsive maintain">
                                    <table class="table mb-0 pb-0">
                                      <thead>
                                        <tr class="text-center">
                                          <th scope="col">
                                            <span class="fs-eight">
                                              Winner
                                            </span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight">
                                              First set-winner
                                            </span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight">
                                              Second set-winner
                                            </span>
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
                                                >
                                                  1
                                                </span>
                                                <span class="fw-bold d-block">
                                                  1.5
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                              >
                                                <span
                                                  class="fs-seven text-center d-block mb-2"
                                                >
                                                  2
                                                </span>
                                                <span class="fw-bold d-block">
                                                  3.8
                                                </span>
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
                                                >
                                                  1
                                                </span>
                                                <span class="fw-bold d-block">
                                                  1.39
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                              >
                                                <span
                                                  class="fs-seven text-center d-block mb-2"
                                                >
                                                  2
                                                </span>
                                                <span class="fw-bold d-block">
                                                  2.85
                                                </span>
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
                                                >
                                                  1
                                                </span>
                                                <span class="fw-bold d-block">
                                                  3.45
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                              >
                                                <span
                                                  class="fs-seven text-center d-block mb-2"
                                                >
                                                  2
                                                </span>
                                                <span class="fw-bold d-block">
                                                  1.39
                                                </span>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <hr
                                  class="w-100 mt-8 d-none d-xl-block n4-color"
                                />
                              </div>
                            </div>
                          </div>
                        </TabPanel>
                        <TabPanel class="tabitem active">
                          <div
                            class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            :key="id"
                            v-for="{
                              id,
                              basketball,
                              titletwo,
                              times,
                              updown,
                              tShart,
                              clubone,
                              clubtwo,
                              clubNameOne,
                              clubNameTwo,
                              chart,
                              star,
                            } in basketballMatch"
                          >
                            <div class="row gx-0 gy-xl-0 gy-7">
                              <div class="col-xl-5 col-xxl-4">
                                <div class="top_matches__clubname">
                                  <div
                                    class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                  >
                                    <div
                                      class="d-flex align-items-center gap-1"
                                    >
                                      <img
                                        :src="basketball"
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint">
                                        {{ titletwo }}
                                      </span>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint">
                                        {{ times }}
                                      </span>
                                      <div
                                        class="d-flex align-items-center gap-1"
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
                                      </div>
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
                                          :src="clubone"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint">
                                          {{ clubNameOne }}
                                        </span>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2"
                                      >
                                        <img
                                          :src="clubtwo"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint">
                                          {{ clubNameTwo }}
                                        </span>
                                      </div>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                    >
                                      <span
                                        class="v-line lg d-none d-xl-block"
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
                                          class="cpoint"
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
                                            <span class="fs-eight">
                                              Winner (incl. overtime)
                                            </span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight">
                                              Handicap (incl. overtime)
                                            </span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight">
                                              Total (incl. overtime)
                                            </span>
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
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  1
                                                </span>
                                                <span class="fw-bold d-block">
                                                  3.45
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  2
                                                </span>
                                                <span class="fw-bold d-block">
                                                  3.45
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  draw
                                                </span>
                                                <span class="fw-bold d-block">
                                                  3.45
                                                </span>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="pt-4">
                                            <div
                                              class="top_matches__innercount d-flex align-items-center gap-2"
                                            >
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  draw
                                                </span>
                                                <span class="fw-bold d-block">
                                                  3.45
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  draw
                                                </span>
                                                <span class="fw-bold d-block">
                                                  3.45
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  draw
                                                </span>
                                                <span class="fw-bold d-block">
                                                  3.45
                                                </span>
                                              </div>
                                            </div>
                                          </td>
                                          <td class="pt-4">
                                            <div
                                              class="top_matches__innercount d-flex align-items-center gap-2"
                                            >
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  draw
                                                </span>
                                                <span class="fw-bold d-block">
                                                  3.45
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  draw
                                                </span>
                                                <span class="fw-bold d-block">
                                                  3.45
                                                </span>
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2"
                                                >
                                                  draw
                                                </span>
                                                <span class="fw-bold d-block">
                                                  3.45
                                                </span>
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
                        </TabPanel>
                        <TabPanel>
                          <div class="tabitem active">
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          International Euroleague
                                        </span>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                      >
                                        <img
                                          src="@/assets/images/icon/live.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          Today, 23:00
                                        </span>
                                        <img
                                          src="@/assets/images/icon/updwon.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
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
                                            src="@/assets/images/icon/queensland.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Queensland Bulls
                                          </span>
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            class="rounded-5"
                                            src="@/assets/images/icon/western-australia.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Western Australia
                                          </span>
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <div class="d-flex flex-column gap-1">
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >
                                            210/6
                                          </span>
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >
                                            0
                                          </span>
                                        </div>
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
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
                                              <span class="fs-eight">
                                                Draw no bet
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">
                                                First innings
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">
                                                First over 96
                                              </span>
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
                                                  >
                                                    1
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    1.5
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven text-center d-block mb-2"
                                                  >
                                                    2
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.8
                                                  </span>
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
                                                  >
                                                    1
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    1.39
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven text-center d-block mb-2"
                                                  >
                                                    2
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    2.85
                                                  </span>
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
                                                  >
                                                    1
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven text-center d-block mb-2"
                                                  >
                                                    2
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    1.39
                                                  </span>
                                                </div>
                                              </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <hr
                                    class="w-100 mt-8 d-none d-xl-block n4-color"
                                  />
                                </div>
                              </div>
                            </div>
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          Bangladesh vs NewZealand
                                        </span>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2 pe-xl-15 flex-nowrap flex-xl-wrap"
                                      >
                                        <img
                                          src="@/assets/images/icon/live.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          Today, 23:00
                                        </span>
                                        <div
                                          class="d-flex align-items-center gap-1"
                                        >
                                          <img
                                            src="@/assets/images/icon/updwon.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
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
                                            src="@/assets/images/icon/Bangladesh.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Bangladesh
                                          </span>
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            src="@/assets/images/icon/new-zealand.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            New Zealand
                                          </span>
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <div class="d-flex flex-column gap-1">
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >
                                            210/6
                                          </span>
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >
                                            100/8
                                          </span>
                                        </div>
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
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
                                              <span class="fs-eight">
                                                1x2
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">
                                                Draw no bet
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">
                                                First innings
                                              </span>
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
                                                    class="fs-seven d-block mb-2"
                                                  >
                                                    draw
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                  >
                                                    draw
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                  >
                                                    draw
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
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
                                                    class="fs-seven d-block mb-2"
                                                  >
                                                    draw
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                  >
                                                    draw
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                  >
                                                    draw
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
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
                                                    class="fs-seven d-block mb-2"
                                                  >
                                                    draw
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                  >
                                                    draw
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                  >
                                                    draw
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
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
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          International Euroleague
                                        </span>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                      >
                                        <img
                                          src="@/assets/images/icon/live.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          Today, 23:00
                                        </span>
                                        <img
                                          src="@/assets/images/icon/updwon.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
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
                                            src="@/assets/images/icon/queensland.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Queensland Bulls
                                          </span>
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            class="rounded-5"
                                            src="@/assets/images/icon/western-australia.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Western Australia
                                          </span>
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <div class="d-flex flex-column gap-1">
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >
                                            210/6
                                          </span>
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >
                                            0
                                          </span>
                                        </div>
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
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
                                              <span class="fs-eight">
                                                Draw no bet
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">
                                                First innings
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">
                                                First over 96
                                              </span>
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
                                                  >
                                                    1
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    1.5
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven text-center d-block mb-2"
                                                  >
                                                    2
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.8
                                                  </span>
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
                                                  >
                                                    1
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    1.39
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven text-center d-block mb-2"
                                                  >
                                                    2
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    2.85
                                                  </span>
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
                                                  >
                                                    1
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven text-center d-block mb-2"
                                                  >
                                                    2
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    1.39
                                                  </span>
                                                </div>
                                              </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <hr
                                    class="w-100 mt-8 d-none d-xl-block n4-color"
                                  />
                                </div>
                              </div>
                            </div>
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          India Vijay Hazare Trophy
                                        </span>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                      >
                                        <img
                                          src="@/assets/images/icon/live.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          Today, 23:00
                                        </span>
                                        <img
                                          src="@/assets/images/icon/updwon.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
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
                                            src="@/assets/images/icon/auckland-aces.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Auckland Aces
                                          </span>
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            class="rounded-5"
                                            src="@/assets/images/icon/otago-volts.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Otago Volts
                                          </span>
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <div class="d-flex flex-column gap-1">
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >
                                            248/2
                                          </span>
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >
                                            268/7
                                          </span>
                                        </div>
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
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
                                              <span class="fs-eight">
                                                Winner (incl. super over)
                                              </span>
                                            </th>
                                          </tr>
                                        </thead>

                                        <tbody>
                                          <tr>
                                            <td class="pt-4">
                                              <div
                                                class="top_matches__innercount d-flex align-items-center gap-2 opacity-50"
                                              >
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven text-center d-block mb-2"
                                                  >
                                                    1
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    -
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven text-center d-block mb-2"
                                                  >
                                                    2
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    -
                                                  </span>
                                                </div>
                                              </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <hr
                                    class="w-100 mt-8 d-none d-xl-block n4-color"
                                  />
                                </div>
                              </div>
                            </div>
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          T20 World Cup
                                        </span>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                      >
                                        <span class="fs-eight cpoint">
                                          Today, 23:00
                                        </span>
                                        <div
                                          class="d-flex align-items-center gap-1"
                                        >
                                          <img
                                            src="@/assets/images/icon/updwon.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
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
                                            src="@/assets/images/icon/nigeria.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Nigeria
                                          </span>
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            src="@/assets/images/icon/zimbabwe.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Zimbabwe
                                          </span>
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/star2.png"
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
                                              <span class="fs-eight">
                                                Winner (super over)
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">
                                                First iNigeria total
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">
                                                innings over total
                                              </span>
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
                                                    class="fs-seven d-block mb-2 text-center"
                                                  >
                                                    1
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    1.39
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-center"
                                                  >
                                                    2
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-center text-nowrap"
                                                  >
                                                    over 1.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
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
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    under 1.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    over 5.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    under 5.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
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
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    over 2.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    under 2.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    over 4.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
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
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          India Vijay Hazare Trophy
                                        </span>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                      >
                                        <img
                                          src="@/assets/images/icon/live.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          Today, 23:00
                                        </span>
                                        <img
                                          src="@/assets/images/icon/updwon.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
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
                                            src="@/assets/images/icon/auckland-aces.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Auckland Aces
                                          </span>
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            class="rounded-5"
                                            src="@/assets/images/icon/otago-volts.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Otago Volts
                                          </span>
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <div class="d-flex flex-column gap-1">
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >
                                            248/2
                                          </span>
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >
                                            268/7
                                          </span>
                                        </div>
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
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
                                              <span class="fs-eight">
                                                Winner (incl. super over)
                                              </span>
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
                                                  >
                                                    1
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    1.3
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven text-center d-block mb-2"
                                                  >
                                                    2
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    1.9
                                                  </span>
                                                </div>
                                              </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <hr
                                    class="w-100 mt-8 d-none d-xl-block n4-color"
                                  />
                                </div>
                              </div>
                            </div>
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          T20 World Cup
                                        </span>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                      >
                                        <span class="fs-eight cpoint">
                                          Today, 23:00
                                        </span>
                                        <div
                                          class="d-flex align-items-center gap-1"
                                        >
                                          <img
                                            src="@/assets/images/icon/updwon.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
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
                                            src="@/assets/images/icon/nigeria.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Nigeria
                                          </span>
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            src="@/assets/images/icon/zimbabwe.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Zimbabwe
                                          </span>
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/star2.png"
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
                                    <div class="table-responsive maintaintwo">
                                      <table class="table mb-0 pb-0">
                                        <thead>
                                          <tr class="text-center">
                                            <th scope="col">
                                              <span class="fs-eight">
                                                Winner (super over)
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">
                                                First iNigeria total
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">
                                                innings over total
                                              </span>
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
                                                    class="fs-seven d-block mb-2 text-center"
                                                  >
                                                    1
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    1.39
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-center"
                                                  >
                                                    2
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-center text-nowrap"
                                                  >
                                                    over 1.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
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
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    under 1.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    over 5.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    under 5.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
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
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    over 2.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    under 2.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    over 4.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
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
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          T20 World Cup
                                        </span>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                      >
                                        <span class="fs-eight cpoint">
                                          Today, 23:00
                                        </span>
                                        <div
                                          class="d-flex align-items-center gap-1"
                                        >
                                          <img
                                            src="@/assets/images/icon/updwon.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
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
                                            src="@/assets/images/icon/nigeria.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Nigeria
                                          </span>
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            src="@/assets/images/icon/zimbabwe.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Zimbabwe
                                          </span>
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/star2.png"
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
                                    <div class="table-responsive maintaintwo">
                                      <table class="table mb-0 pb-0">
                                        <thead>
                                          <tr class="text-center">
                                            <th scope="col">
                                              <span class="fs-eight">
                                                Winner (super over)
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">
                                                First iNigeria total
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">
                                                innings over total
                                              </span>
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
                                                    class="fs-seven d-block mb-2 text-center"
                                                  >
                                                    1
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    1.39
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-center"
                                                  >
                                                    2
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-center text-nowrap"
                                                  >
                                                    over 1.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
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
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    under 1.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    over 5.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    under 5.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
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
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    over 2.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    under 2.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    over 4.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
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
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          T20 World Cup
                                        </span>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                      >
                                        <span class="fs-eight cpoint">
                                          Today, 23:00
                                        </span>
                                        <div
                                          class="d-flex align-items-center gap-1"
                                        >
                                          <img
                                            src="@/assets/images/icon/updwon.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
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
                                            src="@/assets/images/icon/nigeria.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Nigeria
                                          </span>
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            src="@/assets/images/icon/zimbabwe.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Zimbabwe
                                          </span>
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/star2.png"
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
                                    <div class="table-responsive maintaintwo">
                                      <table class="table mb-0 pb-0">
                                        <thead>
                                          <tr class="text-center">
                                            <th scope="col">
                                              <span class="fs-eight">
                                                Winner (super over)
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">
                                                First iNigeria total
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">
                                                innings over total
                                              </span>
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
                                                    class="fs-seven d-block mb-2 text-center"
                                                  >
                                                    1
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    1.39
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-center"
                                                  >
                                                    2
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-center text-nowrap"
                                                  >
                                                    over 1.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
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
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    under 1.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    over 5.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    under 5.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
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
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    over 2.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    under 2.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                  >
                                                    over 4.5
                                                  </span>
                                                  <span
                                                    class="fw-bold d-block text-center"
                                                  >
                                                    3.45
                                                  </span>
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
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint">
                                          India Vijay Hazare Trophy
                                        </span>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                      >
                                        <span class="fs-eight cpoint">
                                          Today, 23:00
                                        </span>
                                        <img
                                          src="@/assets/images/icon/updwon.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
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
                                            src="@/assets/images/icon/auckland-aces.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Auckland Aces
                                          </span>
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            class="rounded-5"
                                            src="@/assets/images/icon/otago-volts.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint">
                                            Otago Volts
                                          </span>
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
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
                                              <span class="fs-eight">
                                                Winner (incl. super over)
                                              </span>
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
                                                  >
                                                    1
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    1.3
                                                  </span>
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven text-center d-block mb-2"
                                                  >
                                                    2
                                                  </span>
                                                  <span class="fw-bold d-block">
                                                    1.9
                                                  </span>
                                                </div>
                                              </div>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <hr
                                    class="w-100 mt-8 d-none d-xl-block n4-color"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </TabPanel>
                        <TabPanel>
                          <div class="tabitem active">
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >International(5 overs)</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                      >
                                        <img
                                          src="@/assets/images/icon/live.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <img
                                          src="@/assets/images/icon/play.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >1 INN, 0.5 OV</span
                                        >
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
                                            src="@/assets/images/icon/australia.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >Australia</span
                                          >
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            class="rounded-5"
                                            src="@/assets/images/icon/united-arab.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >United Arab Emirates</span
                                          >
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <div class="d-flex flex-column gap-1">
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                            >210/6</span
                                          >
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                            >48</span
                                          >
                                        </div>
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
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
                                              <span class="fs-eight"
                                                >Total runs
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight"
                                                >Australia total runs</span
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
                                                  <span
                                                    class="fs-seven text-center d-block mb-2"
                                                    >1</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >1.5</span
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
                                                    >3.8</span
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
                                                    >1</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
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
                                  <hr
                                    class="w-100 mt-8 d-none d-xl-block n4-color"
                                  />
                                </div>
                              </div>
                            </div>
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >International(5 overs)</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                      >
                                        <img
                                          src="@/assets/images/icon/live.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <img
                                          src="@/assets/images/icon/play.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >1 INN, 0.5 OV</span
                                        >
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
                                            src="@/assets/images/icon/australia.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >Australia</span
                                          >
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            class="rounded-5"
                                            src="@/assets/images/icon/united-arab.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >United Arab Emirates</span
                                          >
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <div class="d-flex flex-column gap-1">
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                            >210/6</span
                                          >
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                            >48</span
                                          >
                                        </div>
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
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
                                              <span class="fs-eight"
                                                >Total runs
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight"
                                                >Australia total runs</span
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
                                                  <span
                                                    class="fs-seven text-center d-block mb-2"
                                                    >1</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >1.5</span
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
                                                    >3.8</span
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
                                                    >1</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
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
                                  <hr
                                    class="w-100 mt-8 d-none d-xl-block n4-color"
                                  />
                                </div>
                              </div>
                            </div>
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >International (5 overs)</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                      >
                                        <img
                                          src="@/assets/images/icon/live.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <img
                                          src="@/assets/images/icon/play.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >1 INN, 0.5 OV</span
                                        >
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
                                            src="@/assets/images/icon/cr-vasco.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >CR Vasco da Gama RJ</span
                                          >
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            src="@/assets/images/icon/sc-corinthians.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >SC Corinthians SP</span
                                          >
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/star2.png"
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
                                    <div class="table-responsive maintaintwo">
                                      <table class="table mb-0 pb-0">
                                        <thead>
                                          <tr class="text-center">
                                            <th scope="col">
                                              <span class="fs-eight"
                                                >Winner</span
                                              >
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight"
                                                >Total runs</span
                                              >
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight"
                                                >PAK total runs</span
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
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
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
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
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
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
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
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >International(5 overs)</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                      >
                                        <img
                                          src="@/assets/images/icon/live.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <img
                                          src="@/assets/images/icon/play.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >1 INN, 0.5 OV</span
                                        >
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
                                            src="@/assets/images/icon/australia.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >Australia</span
                                          >
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            class="rounded-5"
                                            src="@/assets/images/icon/united-arab.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >United Arab Emirates</span
                                          >
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <div class="d-flex flex-column gap-1">
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                            >210/6</span
                                          >
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                            >48</span
                                          >
                                        </div>
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
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
                                              <span class="fs-eight"
                                                >Winner
                                              </span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">1x2</span>
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
                                                  <span class="fw-bold d-block"
                                                    >1.5</span
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
                                                    >3.8</span
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
                                                    >1</span
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
                                  <hr
                                    class="w-100 mt-8 d-none d-xl-block n4-color"
                                  />
                                </div>
                              </div>
                            </div>
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >International (5 overs)</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                      >
                                        <img
                                          src="@/assets/images/icon/live.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <img
                                          src="@/assets/images/icon/play.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >1 INN, 0.5 OV</span
                                        >
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
                                            src="@/assets/images/icon/cr-vasco.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >CR Vasco da Gama RJ</span
                                          >
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            src="@/assets/images/icon/sc-corinthians.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >SC Corinthians SP</span
                                          >
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/star2.png"
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
                                                >Winner</span
                                              >
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight"
                                                >Total runs</span
                                              >
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight"
                                                >PAK total runs</span
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
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
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
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
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
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
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
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/cricket.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >International (5 overs)</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                      >
                                        <img
                                          src="@/assets/images/icon/live.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <img
                                          src="@/assets/images/icon/play.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >1 INN, 0.5 OV</span
                                        >
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
                                            src="@/assets/images/icon/cr-vasco.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >CR Vasco da Gama RJ</span
                                          >
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            src="@/assets/images/icon/sc-corinthians.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >SC Corinthians SP</span
                                          >
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <span
                                          class="v-line lg d-none d-xl-block"
                                        ></span>
                                        <div class="d-flex flex-column gap-5">
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/line-chart.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                          <img
                                            class="cpoint"
                                            src="@/assets/images/icon/star2.png"
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
                                                >Winner</span
                                              >
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight"
                                                >Total runs</span
                                              >
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight"
                                                >PAK total runs</span
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
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
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
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
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
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
                                                    >draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >3.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-8 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2"
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
                        </TabPanel>
                        <TabPanel class="tabitem active">
                          <div
                            class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            :key="id"
                            v-for="{
                              id,
                              basketball,
                              titletwo,
                              times,

                              clubone,
                              clubtwo,
                              clubNameOne,
                              clubNameTwo,
                            } in iceHockeyMatch"
                          >
                            <div class="row gx-0 gy-xl-0 gy-7">
                              <div class="col-xl-5 col-xxl-4">
                                <div class="top_matches__clubname">
                                  <div
                                    class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                  >
                                    <div
                                      class="d-flex align-items-center gap-1"
                                    >
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
                                      <div
                                        class="d-flex align-items-center gap-2 mb-4"
                                      >
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
                                      <div
                                        class="d-flex align-items-center gap-2"
                                      >
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
                                          src="@/assets/images/icon/line-chart.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <img
                                          class="cpoint visually-hidden"
                                          src="@/assets/images/icon/star2.png"
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
                        </TabPanel>
                        <TabPanel>
                          <div class="tabitem active">
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/fifa-volta.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >USA NBA All-time</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                      >
                                        <div
                                          class="d-flex align-items-center gap-1"
                                        >
                                          <img
                                            src="@/assets/images/icon/live.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                          <img
                                            src="@/assets/images/icon/play.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
                                        <span class="fs-eight cpoint"
                                          >2′ 4th quarter</span
                                        >
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
                                            src="@/assets/images/icon/cf-ttigres-uanl.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >CF Tigres UANL</span
                                          >
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            src="@/assets/images/icon/club-america.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >Club America</span
                                          >
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <div class="d-flex flex-column gap-1">
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                            >52</span
                                          >
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                            >54</span
                                          >
                                        </div>
                                        <span
                                          class="v-line lg d-none d-xl-block"
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
                                              <span class="fs-eight"
                                                >Winner (incl overtime)</span
                                              >
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">1x2</span>
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
                                                  <span class="fw-bold d-block"
                                                    >1.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                    >draw</span
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
                                                    >2</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >2.25</span
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
                                                    >1 or draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >1.39</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                    >1 or 2</span
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
                                                    >draw or 2</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >2.45</span
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
                                                    >over 0.5</span
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
                                                    >under 0.5</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >1.39</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                    >over 5</span
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
                                </div>
                              </div>
                            </div>
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/fifa-volta.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >Turkiye Super Lig</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                      >
                                        <div
                                          class="d-flex align-items-center gap-1"
                                        >
                                          <img
                                            src="@/assets/images/icon/live.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                          <img
                                            src="@/assets/images/icon/play.png"
                                            width="{16}"
                                            height="{16}"
                                            alt="Icon"
                                          />
                                        </div>
                                        <span class="fs-eight cpoint"
                                          >56′ 2nd half</span
                                        >
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
                                            src="@/assets/images/icon/cmn-footbal.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >Petroleros de FC</span
                                          >
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            src="@/assets/images/icon/cmn-footbal.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >Escorpiones FC</span
                                          >
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <div class="d-flex flex-column gap-1">
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                            >52</span
                                          >
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                            >52</span
                                          >
                                        </div>
                                        <span
                                          class="v-line lg d-none d-xl-block"
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
                                              <span class="fs-eight"
                                                >Winner (incl overtime)</span
                                              >
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">1x2</span>
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight"
                                                >Total</span
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
                                                  <span class="fw-bold d-block"
                                                    >1.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                    >draw</span
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
                                                    >2</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >2.25</span
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
                                                    >1 or draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >1.39</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                    >1 or 2</span
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
                                                    >draw or 2</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >2.45</span
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
                                                    >over 0.5</span
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
                                                    >under 0.5</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >1.39</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                    >over 5</span
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
                                </div>
                              </div>
                            </div>
                            <div
                              class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            >
                              <div class="row gx-0 gy-xl-0 gy-7">
                                <div class="col-xl-5 col-xxl-4">
                                  <div class="top_matches__clubname">
                                    <div
                                      class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                                    >
                                      <div
                                        class="d-flex align-items-center gap-1"
                                      >
                                        <img
                                          src="@/assets/images/icon/fifa-volta.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <span class="fs-eight cpoint"
                                          >Belarus League A</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                      >
                                        <span class="fs-eight cpoint me-4"
                                          >Today, 10:52</span
                                        >
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
                                            src="@/assets/images/icon/cmn-footbal.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >Mogilev</span
                                          >
                                        </div>
                                        <div
                                          class="d-flex align-items-center gap-2"
                                        >
                                          <img
                                            src="@/assets/images/icon/cmn-footbal.png"
                                            width="{24}"
                                            height="{24}"
                                            alt="Icon"
                                          />
                                          <span class="fs-seven cpoint"
                                            >Pinsk</span
                                          >
                                        </div>
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                      >
                                        <div class="d-flex flex-column gap-1">
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                            >52</span
                                          >
                                          <span
                                            class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                            >54</span
                                          >
                                        </div>
                                        <span
                                          class="v-line lg d-none d-xl-block"
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
                                              <span class="fs-eight"
                                                >Winner (incl overtime)</span
                                              >
                                            </th>
                                            <th scope="col">
                                              <span class="fs-eight">1x2</span>
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
                                                  <span class="fw-bold d-block"
                                                    >1.45</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                    >draw</span
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
                                                    >2</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >2.25</span
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
                                                    >1 or draw</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >1.39</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                    >1 or 2</span
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
                                                    >draw or 2</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >2.45</span
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
                                                    >over 0.5</span
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
                                                    >under 0.5</span
                                                  >
                                                  <span class="fw-bold d-block"
                                                    >1.39</span
                                                  >
                                                </div>
                                                <div
                                                  class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                                >
                                                  <span
                                                    class="fs-seven d-block mb-2 text-nowrap"
                                                    >over 5</span
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
                                </div>
                              </div>
                            </div>
                          </div>
                        </TabPanel>
                      </TabPanels>
                    </TabGroup>
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

<style scoped></style>
