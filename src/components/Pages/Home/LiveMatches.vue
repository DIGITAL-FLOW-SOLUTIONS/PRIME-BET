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
                  <img width="{32}" height="{32}" :src="liveMatch" alt="Icon" />
                  <h3>Live Matches</h3>
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
                          v-for="{ imgSrc, buttonName, id } in tabTwo"
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
                              clubone,
                              clubtwo,
                              clubNameOne,
                              clubNameTwo,
                            } in liveSoccerMatch"
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
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint"
                                        >Turkiye . Super Lig</span
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
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
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
                                            <span class="fs-eight">1x2</span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Double chance</span
                                            >
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
                                        src="@/assets/images/icon/floorball.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint"
                                        >Oceania Pacific Games</span
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
                                        >66′ 1st half</span
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
                                          >Fiji</span
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
                                          >Solomon Islands</span
                                        >
                                      </div>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                    >
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >1</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
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
                                            <span class="fs-eight"></span>
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr class="w-100">
                                          <td class="pt-4 w-100">
                                            <div
                                              class="top_matches__innercount w-100"
                                            >
                                              <div
                                                class="top_matches__innercount-item clickable-active px-7 rounded-3 n11-bg text-center w-100"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap py-5 w-100"
                                                  >No Markets Available</span
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
                                        src="@/assets/images/icon/floorball.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint"
                                        >Oceania Pacific Games</span
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
                                        >66′ 1st half</span
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
                                          >Fiji</span
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
                                          >Solomon Islands</span
                                        >
                                      </div>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                    >
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >1</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
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
                                          <th scope="col"></th>
                                          <th scope="col">
                                            {/*
                                            <span class="fs-eight"
                                              >Double chance</span
                                            >
                                            */}
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"></span>
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr class="w-100">
                                          <td class="pt-4 w-100">
                                            <div
                                              class="top_matches__innercount w-100"
                                            >
                                              <div
                                                class="top_matches__innercount-item clickable-active px-7 rounded-3 n11-bg text-center w-100"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap py-5 w-100"
                                                  >No Markets Available</span
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
                                        src="@/assets/images/icon/floorball.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint"
                                        >Oceania Pacific Games</span
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
                                        >66′ 1st half</span
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
                                          >Fiji</span
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
                                          >Solomon Islands</span
                                        >
                                      </div>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                    >
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >1</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
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
                                        <tr>
                                          <th scope="col">
                                            <span class="fs-eight ms-20 ps-4"
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
                            v-for="{
                              id,
                              clubone,
                              clubtwo,
                              clubNameOne,
                              clubNameTwo,
                            } in liveSoccerMatch"
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
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint"
                                        >Turkiye . Super Lig</span
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
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
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
                                            <span class="fs-eight">1x2</span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Double chance</span
                                            >
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
                                        src="@/assets/images/icon/fifa-volta.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint"
                                        >Turkiye . Super Lig</span
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
                                          >0</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
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
                                            <span class="fs-eight">1x2</span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Double chance</span
                                            >
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
                                        >Women, Apertura</span
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
                                        >82′ 2nd half</span
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
                                          src="@/assets/images/icon/borussia-bortmund.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Dortmund</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2"
                                      >
                                        <img
                                          class="rounded-5"
                                          src="@/assets/images/icon/mainz.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Mainz</span
                                        >
                                      </div>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                    >
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
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
                                            <!-- <span class="fs-eight">1x2</span> -->
                                          </th>
                                          <th scope="col">
                                            <!-- <span class="fs-eight"
                                              >Double chance</span
                                            > -->
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"></span>
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr class="w-100">
                                          <td class="pt-4 w-100">
                                            <div
                                              class="top_matches__innercount w-100"
                                            >
                                              <div
                                                class="top_matches__innercount-item clickable-active px-7 rounded-3 n11-bg text-center w-100"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap py-5 w-100"
                                                  >No Markets Available</span
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
                                        >England League</span
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
                                        >66′ 1st half</span
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
                                          src="@/assets/images/icon/manchester-city.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Manchester City</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2"
                                      >
                                        <img
                                          src="@/assets/images/icon/man-united.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Man. United</span
                                        >
                                      </div>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                    >
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >1</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
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
                                        <tr>
                                          <th scope="col">
                                            <span class="fs-eight ms-20 ps-4"
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
                                                  >3.45</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-7 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >1</span
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
                                        >Turkiye . Super Lig</span
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
                                          >0</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
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
                                            <span class="fs-eight">Winner</span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >First set-winner</span
                                            >
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Second set-winner</span
                                            >
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
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >1</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >2</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >3</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                            </div>
                                          </td>
                                          <td class="pt-4">
                                            <div
                                              class="top_matches__innercount d-flex align-items-center gap-2 opacity-50"
                                            >
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >1</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >2</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >3</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                            </div>
                                          </td>
                                          <td class="pt-4">
                                            <div
                                              class="top_matches__innercount d-flex align-items-center gap-2 opacity-50"
                                            >
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >1</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >2</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >3</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
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
                                        >Turkiye . Super Lig</span
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
                                          >0</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
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
                                            <span class="fs-eight">Winner</span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >First set-winner</span
                                            >
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Second set-winner</span
                                            >
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
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >1</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >2</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >3</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                            </div>
                                          </td>
                                          <td class="pt-4">
                                            <div
                                              class="top_matches__innercount d-flex align-items-center gap-2 opacity-50"
                                            >
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >1</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >2</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >3</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                            </div>
                                          </td>
                                          <td class="pt-4">
                                            <div
                                              class="top_matches__innercount d-flex align-items-center gap-2 opacity-50"
                                            >
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >1</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >2</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
                                                >
                                              </div>
                                              <div
                                                class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                              >
                                                <span
                                                  class="fs-seven d-block mb-2 text-nowrap"
                                                  >3</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
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
                                        >Turkiye . Super Lig</span
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
                                          >0</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
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
                                            <span class="fs-eight">Win</span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >First set-winner</span
                                            >
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
                                        src="@/assets/images/icon/basketball.png"
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
                                      <img
                                        src="@/assets/images/icon/live.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="icon"
                                      />
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
                                          >Sacramento Kings</span
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
                                          >Golden Warriors</span
                                        >
                                      </div>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                    >
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >0</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >0</span
                                        >
                                      </div>
                                      <span class="v-line lg"></span>
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
                                              >Winner (incl. overtime)
                                            </span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"></span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Handicap (incl overtime)</span
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
                                                  >(1.7)1</span
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
                                                  >(-7.5)1</span
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
                                                  >(-7.5)1</span
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
                                                  >(-1.5)1</span
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
                                        src="@/assets/images/icon/basketball.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint"
                                        >International. Euroleague</span
                                      >
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
                                          src="@/assets/images/icon/updwon.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <img
                                          src="@/assets/images/icon/t-shart.png"
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
                                          src="@/assets/images/icon/sivasspor.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Sivasspor</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2"
                                      >
                                        <img
                                          src="@/assets/images/icon/trabzonspor.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Trabzonspor</span
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
                                          src="@/assets/images/icon/star.png"
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
                                            <span class="fs-eight"
                                              >Double chance</span
                                            >
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
                                        src="@/assets/images/icon/basketball.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint"
                                        >USA. NBA</span
                                      >
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
                                          src="@/assets/images/icon/updwon.png"
                                          width="{16}"
                                          height="{16}"
                                          alt="Icon"
                                        />
                                        <img
                                          src="@/assets/images/icon/t-shart.png"
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
                                          src="@/assets/images/icon/istanbul-basaksehir.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Istanbul Basaksehir</span
                                        >
                                      </div>
                                      <div
                                        class="d-flex align-items-center gap-2"
                                      >
                                        <img
                                          src="@/assets/images/icon/pendikspor.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Pendikspor</span
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
                                            <span class="fs-eight">1x2</span>
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Double chance</span
                                            >
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
                                        >Bangladesh vs NewZealand</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-2 pe-xl-15 flex-nowrap flex-xl-wrap me-6"
                                    >
                                      <img
                                        src="@/assets/images/icon/live.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint"
                                        >Today, 23:00</span
                                      >
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
                                        <span class="fs-seven cpoint"
                                          >Bangladesh</span
                                        >
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
                                        <span class="fs-seven cpoint"
                                          >New Zealand</span
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
                                          >100/8</span
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
                                            <span class="fs-eight"
                                              >Draw no bet</span
                                            >
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
                                      <img
                                        src="@/assets/images/icon/live.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="icon"
                                      />
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
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >210/6</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >0</span
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
                                        >India Vijay Hazare Trophy</span
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
                                          src="@/assets/images/icon/auckland-aces.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Auckland Aces</span
                                        >
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
                                        <span class="fs-seven cpoint"
                                          >Otago Volts</span
                                        >
                                      </div>
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-4 position-relative pe-xl-15"
                                    >
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >248/2</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >268/7</span
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
                                              >Winner (incl. super over)
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
                                                  >1</span
                                                >
                                                <span class="fw-bold d-block"
                                                  >-</span
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
                                                  >-</span
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
                                      <img
                                        src="@/assets/images/icon/live.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="icon"
                                      />
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
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >210/6</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >0</span
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
                                        src="@/assets/images/icon/ecricket.png"
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
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >210/6</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >0</span
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
                                  <div class="table-responsive maintaintwo">
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
                                                  >3.45</span
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
                                        src="@/assets/images/icon/ecricket.png"
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
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >71/2</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >0</span
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
                                                  >3.45</span
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
                                        src="@/assets/images/icon/ecricket.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint"
                                        >World Cup (5 overs)</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-2 pe-xl-15 flex-nowrap flex-xl-wrap me-6"
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
                                          src="@/assets/images/icon/Bangladesh.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Bangladesh</span
                                        >
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
                                        <span class="fs-seven cpoint"
                                          >New Zealand</span
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
                                          >100/8</span
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
                              <div class="col-xl-7 col-xxl-8">
                                <div class="top_matches__clubdata">
                                  <div class="table-responsive">
                                    <table class="table mb-0 pb-0">
                                      <thead>
                                        <tr class="text-center">
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Total runs</span
                                            >
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
                                        src="@/assets/images/icon/ecricket.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint"
                                        >World Cup (5 overs)</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-2 pe-xl-15 flex-nowrap flex-xl-wrap me-6"
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
                                          src="@/assets/images/icon/Bangladesh.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Bangladesh</span
                                        >
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
                                        <span class="fs-seven cpoint"
                                          >New Zealand</span
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
                                          >100/8</span
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
                              <div class="col-xl-7 col-xxl-8">
                                <div class="top_matches__clubdata">
                                  <div class="table-responsive maintaintwo">
                                    <table class="table mb-0 pb-0">
                                      <thead>
                                        <tr class="text-center">
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Total runs</span
                                            >
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Australia total runs</span
                                            >
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
                                        >International Euroleague</span
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
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >71/2</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >0</span
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
                                                  >3.45</span
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
                                      <span class="fs-eight cpoint"
                                        >International Euroleague</span
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
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >210/6</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >0</span
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
                                  <div class="table-responsive maintaintwo">
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
                                                  >3.45</span
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
                                        src="@/assets/images/icon/ecricket.png"
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
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >71/2</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >0</span
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
                                                  >3.45</span
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
                                        src="@/assets/images/icon/ecricket.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint"
                                        >World Cup (5 overs)</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-2 pe-xl-15 flex-nowrap flex-xl-wrap me-6"
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
                                          src="@/assets/images/icon/Bangladesh.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Bangladesh</span
                                        >
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
                                        <span class="fs-seven cpoint"
                                          >New Zealand</span
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
                                          >100/8</span
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
                              <div class="col-xl-7 col-xxl-8">
                                <div class="top_matches__clubdata">
                                  <div class="table-responsive">
                                    <table class="table mb-0 pb-0">
                                      <thead>
                                        <tr class="text-center">
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Total runs</span
                                            >
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
                                        src="@/assets/images/icon/ecricket.png"
                                        width="{16}"
                                        height="{16}"
                                        alt="Icon"
                                      />
                                      <span class="fs-eight cpoint"
                                        >World Cup (5 overs)</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-2 pe-xl-15 flex-nowrap flex-xl-wrap me-6"
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
                                          src="@/assets/images/icon/Bangladesh.png"
                                          width="{24}"
                                          height="{24}"
                                          alt="Icon"
                                        />
                                        <span class="fs-seven cpoint"
                                          >Bangladesh</span
                                        >
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
                                        <span class="fs-seven cpoint"
                                          >New Zealand</span
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
                                          >100/8</span
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
                              <div class="col-xl-7 col-xxl-8">
                                <div class="top_matches__clubdata">
                                  <div class="table-responsive maintaintwo">
                                    <table class="table mb-0 pb-0">
                                      <thead>
                                        <tr class="text-center">
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Total runs</span
                                            >
                                          </th>
                                          <th scope="col">
                                            <span class="fs-eight"
                                              >Australia total runs</span
                                            >
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
                                        >International Euroleague</span
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
                                      <div class="d-flex flex-column gap-1">
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven"
                                          >71/2</span
                                        >
                                        <span
                                          class="top_matches__cmncard-countcercle rounded-17 fs-seven text-center"
                                          >0</span
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
                                                  >3.45</span
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
                            } in liveIceHockeyMatch"
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
                                      class="d-flex align-items-center gap-2 pe-xl-15 flex-nowrap flex-xl-wrap me-6"
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
                                      <span class="fs-eight cpoint"
                                        >6′ 2nd half</span
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
                                      <div
                                        class="d-flex flex-column gap-5"
                                      ></div>
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
                            } in liveIceHockeyMatch"
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
                                      <span class="fs-eight cpoint">
                                        {{ titletwo }}</span
                                      >
                                    </div>
                                    <div
                                      class="d-flex align-items-center gap-2 pe-xl-15 flex-nowrap flex-xl-wrap me-6"
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
                                      <span class="fs-eight cpoint"
                                        >6′ 2nd half</span
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
                                      <div
                                        class="d-flex flex-column gap-5"
                                      ></div>
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
                              clubNameOne,
                              clubNameTwo,
                            } in liveIceFifaVoltaMatch"
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
                                      class="d-flex align-items-center gap-2 pe-xl-15 flex-nowrap flex-xl-wrap me-6"
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
                                      <span class="fs-eight cpoint"
                                        >6′ 2nd half</span
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
                                          src="@/assets/images/icon/mail.png"
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
                                          src="@/assets/images/icon/new-zealand.png"
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
                                      <div
                                        class="d-flex flex-column gap-5"
                                      ></div>
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
import liveMatch from "@/assets/images/icon/live-match.png";
import {
  tabTwo,
  liveSoccerMatch,
  liveIceHockeyMatch,
  liveIceFifaVoltaMatch,
} from "../../../assets/data/tabTwo";
</script>

<style scoped></style>
