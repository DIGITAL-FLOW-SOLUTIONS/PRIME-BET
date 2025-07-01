<template>
  <section class="top_matches pb-5 pb-md-6">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 gx-0 gx-lg-4">
          <div class="top_matches__main">
            <div class="row w-100">
              <div class="col-12">
                <div
                  class="top_matches__title d-flex align-items-center gap-2 mb-4"
                >
                  <img width="{32}" height="{32}" :src="clock" alt="Icon" />
                  <h3>Upcoming Events</h3>
                </div>
                <div class="top_matches__content">
                  <div class="singletab">
                    <TabGroup>
                      <TabList
                        class="tablinks d-flex align-items-center gap-4 flex-wrap mb-5 mb-md-6"
                      >
                        <Tab
                          as="template"
                          v-slot="{ selected }"
                          v-for="{ imgSrc, buttonName, id } in tabThree"
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
                            v-for="{
                              id,
                              titletwo,
                              douchance,
                              ttl,
                              clubone,
                              clubtwo,
                              clubNameOne,
                              clubNameTwo,
                              chart,
                              star,
                            } in soccerUpComing"
                            :key="id"
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
                                        src="@/assets/images/icon/floorball.png"
                                        width="{15}"
                                        height="{15}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint">{{
                                        titletwo
                                      }}</span>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint"
                                        >In 2 days, 02:00</span
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
                                  <div class="table-responsive maintain">
                                    <table class="table mb-0 pb-0">
                                      <thead>
                                        <tr class="text-center">
                                          <th scope="col">
                                            <span class="fs-eight">1x2</span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight">{{
                                              douchance
                                            }}</span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight">{{
                                              ttl
                                            }}</span>
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
                                                  >3.45</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >draw</span
                                                >
                                                <span
                                                  class="fw-bold d-block text-nowrap"
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
                                                  >1 or draw</span
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
                                                  >over 2.5</span
                                                >
                                                <span
                                                  class="fw-bold d-block text-nowrap"
                                                  >3.45</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >under 2</span
                                                >
                                                <span
                                                  class="fw-bold d-block text-nowrap"
                                                  >1.45</span
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
                        <TabPanel class="tabitem active">
                          <div
                            class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            v-for="{
                              id,
                              floorball,
                              titletwo,
                              douchance,
                              ttl,
                              clubone,
                              clubtwo,
                              clubNameOne,
                              clubNameTwo,
                              chart,
                              star,
                            } in fifaUpComing"
                            :key="id"
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
                                        :src="floorball"
                                        width="{15}"
                                        height="{15}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint">{{
                                        titletwo
                                      }}</span>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint"
                                        >In 2 days, 02:00</span
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
                                        class="v-line lg d-none d-xl-block"
                                      ></span>
                                      <div class="gap-5">
                                        <img
                                          class="cpoint visually-hidden"
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
                                            <span class="fs-eight">1x2</span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight">{{
                                              douchance
                                            }}</span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight">{{
                                              ttl
                                            }}</span>
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
                                                  >3.45</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >draw</span
                                                >
                                                <span
                                                  class="fw-bold d-block text-nowrap"
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
                                                  >1 or draw</span
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
                                                  >over 2.5</span
                                                >
                                                <span
                                                  class="fw-bold d-block text-nowrap"
                                                  >3.45</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >under 2</span
                                                >
                                                <span
                                                  class="fw-bold d-block text-nowrap"
                                                  >1.45</span
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
                        <TabPanel class="tabitem active">
                          <div
                            class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            v-for="{
                              id,

                              titletwo,

                              clubone,
                              clubtwo,
                              clubNameOne,
                              clubNameTwo,
                              chart,
                              star,
                            } in tennisUpCE"
                            :key="id"
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
                                        src="@/assets/images/icon/tennis.png"
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
                                      <span class="fs-eight cpoint me-xl-6"
                                        >Today, 23:00</span
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
                                          class="rounded-5"
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
                                  <div class="table-responsive">
                                    <table class="table mb-0 pb-0">
                                      <thead>
                                        <tr class="text-center">
                                          <th scope="col">
                                            <span class="fs-eight">Winner</span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >First set-winner</span
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
                            v-for="{
                              id,
                              basketball,
                              titletwo,
                              clubone,
                              clubtwo,
                              clubNameOne,
                              clubNameTwo,
                              chart,
                              star,
                            } in basketballUpCE"
                            :key="id"
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
                                      <span class="fs-eight cpoint me-6"
                                        >Today 13:30</span
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
                        </TabPanel>
                        <TabPanel class="tabitem active">
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
                                        >T20 World Cup</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint"
                                        >Today 13:30</span
                                      >
                                      <img
                                        src="@/assets/images/icon/updwon.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="ion"
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
                                          src="@/assets/images/icon/rwanda.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Rwanda</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2"
                                      >
                                        <img
                                          class="rounded-5"
                                          src="@/assets/images/icon/tanzania.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Tanzania</span
                                        >
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
                                                  >over 1.5</span
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
                                                  >under 1.5</span
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
                                                  >under 5.5</span
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
                                                  >over 2.5</span
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
                                                  >under 2.5</span
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
                                                  >over 4.5</span
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
                                        >T20 World Cup</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint"
                                        >Today 13:30</span
                                      >
                                      <img
                                        src="@/assets/images/icon/updwon.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="ion"
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
                                          src="@/assets/images/icon/rwanda.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Rwanda</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2"
                                      >
                                        <img
                                          class="rounded-5"
                                          src="@/assets/images/icon/tanzania.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Tanzania</span
                                        >
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
                                                  >over 1.5</span
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
                                                  >under 1.5</span
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
                                                  >under 5.5</span
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
                                                  >over 2.5</span
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
                                                  >under 2.5</span
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
                                                  >over 4.5</span
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
                                        >T20 World Cup</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint"
                                        >Today 13:30</span
                                      >
                                      <img
                                        src="@/assets/images/icon/updwon.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="ion"
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
                                          src="@/assets/images/icon/rwanda.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Rwanda</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2"
                                      >
                                        <img
                                          class="rounded-5"
                                          src="@/assets/images/icon/tanzania.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Tanzania</span
                                        >
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
                                                  >over 1.5</span
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
                                                  >under 1.5</span
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
                                                  >under 5.5</span
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
                                                  >over 2.5</span
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
                                                  >under 2.5</span
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
                                                  >over 4.5</span
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
                                        >International Euroleague</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint"
                                        >Today, 23:00</span
                                      >
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
                                        <span class="fs-seven cpoint"
                                          >Queensland Bulls</span
                                        >
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
                                              >Draw no bet
                                            </span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >First innings</span
                                            >
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >First over 96</span
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
                                        >International Euroleague</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint"
                                        >Today, 23:00</span
                                      >
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
                                        <span class="fs-seven cpoint"
                                          >Queensland Bulls</span
                                        >
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
                                              >Draw no bet
                                            </span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >First innings</span
                                            >
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >First over 96</span
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
                                        >International Euroleague</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint"
                                        >Today, 23:00</span
                                      >
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
                                        <span class="fs-seven cpoint"
                                          >Queensland Bulls</span
                                        >
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
                                              >Winner (super over)
                                            </span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight">Winner</span>
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
                          <div class="top_matches__cmncard p2-bg p-4 rounded-3">
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
                                        >International Euroleague</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint"
                                        >Today, 23:00</span
                                      >
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
                                        <span class="fs-seven cpoint"
                                          >Queensland Bulls</span
                                        >
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
                                            <span class="fs-eight"
                                              >Winner (super over)
                                            </span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight">Winner</span>
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
                            v-for="{
                              id,
                              titletwo,

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
                                    <div
                                      class="d-flex align-items-center gap-1"
                                    >
                                      <img
                                        src="@/assets/images/icon/ecricket.png"
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
                                      <span class="fs-eight cpoint"
                                        >Today, 23:00</span
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
                                            <span class="fs-eight"
                                              >Total runs</span
                                            >
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
                                        >International Euroleague</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint"
                                        >Today, 23:00</span
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
                                          src="@/assets/images/icon/queensland.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Queensland Bulls</span
                                        >
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
                                            <span class="fs-eight"
                                              >Draw no bet
                                            </span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >First innings</span
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
                                        >International Euroleague</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint"
                                        >Today, 23:00</span
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
                                          src="@/assets/images/icon/queensland.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Queensland Bulls</span
                                        >
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
                                            <span class="fs-eight"
                                              >Draw no bet
                                            </span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >First innings</span
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
                          <div class="top_matches__cmncard p2-bg p-4 rounded-3">
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
                                        src="@/assets/images/icon/ecricket.png"
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
                                      <span class="fs-eight cpoint"
                                        >Today, 23:00</span
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
                                          src="@/assets/images/icon/ecricket.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Nigeria</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2"
                                      >
                                        <img
                                          src="@/assets/images/icon/ecricket.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Zimbabwe</span
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
                                            <span class="fs-eight"
                                              >Total runs</span
                                            >
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
                        </TabPanel>
                        <TabPanel class="tabitem active">
                          <div
                            class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            v-for="{
                              id,
                              titletwo,

                              updown,
                              tShart,

                              clubone,
                              clubtwo,
                              clubNameOne,
                              clubNameTwo,
                              chart,
                              star,
                            } in amricanFootballUpCE"
                            :key="id"
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
                                        src="@/assets/images/icon/america-football.png"
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
                                      <span class="fs-eight cpoint"
                                        >Today, 23:00</span
                                      >
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
                                        class="v-line lg d-none d-xl-block"
                                      ></span>
                                      <div
                                        class="d-flex flex-column gap-5 mb-5"
                                      >
                                        <img
                                          class="cpoint mt-5"
                                          :src="chart"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <img
                                          class="cpoint d-none"
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
                                              >Winner (incl overtime)</span
                                            >
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Handicap (incl overtime)</span
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
                        </TabPanel>

                        <TabPanel class="tabitem active">
                          <div
                            class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            v-for="{
                              id,
                              basketball,
                              titletwo,

                              clubone,
                              clubtwo,
                              clubNameOne,
                              clubNameTwo,
                              chart,
                              star,
                            } in basketballUpCE"
                            :key="id"
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
                                      <span class="fs-eight cpoint me-6"
                                        >Today 13:30</span
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
                        </TabPanel>
                        <TabPanel class="tabitem active">
                          <div
                            class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            v-for="{
                              id,
                              clubone,
                              clubtwo,
                              clubNameOne,
                              clubNameTwo,
                            } in nb2klast"
                            :key="id"
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
                                        >Men&apos;s World Cup</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-2 pe-xl-15 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint"
                                        >Today, 23:00</span
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
                                            <span class="fs-eight"
                                              >Total runs</span
                                            >
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
                        </TabPanel>
                        <TabPanel class="tabitem active">
                          <div
                            class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4"
                            v-for="{
                              id,
                              titletwo,
                              clubone,
                              clubtwo,
                              clubNameOne,
                              clubNameTwo,
                              star,
                            } in fifaVoltaLast"
                            :key="id"
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
                                      <span class="fs-eight cpoint">{{
                                        titletwo
                                      }}</span>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                                    >
                                      <span class="fs-eight cpoint me-7"
                                        >Today, 13:07</span
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
                                        class="v-line lg d-none d-xl-block"
                                      ></span>
                                      <div
                                        class="d-flex flex-column gap-5 mb-5"
                                      >
                                        <img
                                          class="cpoint mt-5"
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
                                              >Winner (incl overtime)</span
                                            >
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Handicap (incl overtime)</span
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

<script setup lang="ts">
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from "@headlessui/vue";
import {
  tabThree,
  soccerUpComing,
  fifaUpComing,
  tennisUpCE,
  basketballUpCE,
  eCricketUpCE,
  amricanFootballUpCE,
  nb2klast,
  fifaVoltaLast,
} from "../../../assets/data/tabThree";

import clock from "@/assets/images/icon/clock-icon.png";
</script>

<style scoped></style>
