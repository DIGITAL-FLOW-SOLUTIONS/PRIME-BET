<template>
  <section class="top_matches">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 gx-0 gx-sm-4">
          <div class="top_matches__main">
            <div class="row w-100">
              <div class="col-12">
                <div
                  class="top_matches__title d-flex align-items-center gap-2 mb-4 mb-md-6"
                >
                  <img :src="liveMatch" width="{32}" height="{32}" alt="Icon" />
                  <h3>Live Matches</h3>
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
                                :src="volta"
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
                              <div class="d-flex align-items-center gap-1">
                                <img
                                  :src="live"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                                <img
                                  :src="play"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                              </div>
                              <span class="fs-eight cpoint">56′ 2nd half</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  :src="tigres"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint"
                                  >CF Tigres UANL</span
                                >
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  :src="america"
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
                              <span class="v-line lg d-none d-xl-block"></span>
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
                          <div class="table-responsive maintaintwo">
                            <table class="table mb-0 pb-0">
                              <thead>
                                <tr class="text-center">
                                  <th scope="col">
                                    <span class="fs-eight">1x2</span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">Double chance</span>
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
                  <div class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4">
                    <div class="row gx-0 gy-xl-0 gy-7">
                      <div class="col-xl-5 col-xxl-4">
                        <div class="top_matches__clubname">
                          <div
                            class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                          >
                            <div class="d-flex align-items-center gap-1">
                              <img
                                :src="volta"
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
                              <div class="d-flex align-items-center gap-1">
                                <img
                                  :src="live"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                                <img
                                  :src="play"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                              </div>
                              <span class="fs-eight cpoint">56′ 2nd half</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  :src="tigres"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint"
                                  >CF Tigres UANL</span
                                >
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  :src="america"
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
                              <span class="v-line lg d-none d-xl-block"></span>
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
                          <div class="table-responsive maintaintwo">
                            <table class="table mb-0 pb-0">
                              <thead>
                                <tr class="text-center">
                                  <th scope="col">
                                    <span class="fs-eight">1x2</span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">Double chance</span>
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
                  <div class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4">
                    <div class="row gx-0 gy-xl-0 gy-7">
                      <div class="col-xl-5 col-xxl-4">
                        <div class="top_matches__clubname">
                          <div
                            class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                          >
                            <div class="d-flex align-items-center gap-1">
                              <img
                                :src="volta"
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
                              <div class="d-flex align-items-center gap-1">
                                <img
                                  :src="live"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                                <img
                                  :src="play"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                              </div>
                              <span class="fs-eight cpoint">82′ 2nd half</span>
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
                                <span class="fs-seven cpoint">Dortmund</span>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  class="rounded-5"
                                  :src="mainz"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Mainz</span>
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
                              <span class="v-line lg d-none d-xl-block"></span>
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
                                    <!-- {/* <span class="fs-eight">1x2</span> */} -->
                                  </th>
                                  <th scope="col">
                                    <!-- {/*
                                    <span class="fs-eight">Double chance</span>
                                    */} -->
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight"></span>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="w-100">
                                  <td class="pt-4 w-100">
                                    <div class="top_matches__innercount w-100">
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
                  <div class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4">
                    <div class="row gx-0 gy-xl-0 gy-7">
                      <div class="col-xl-5 col-xxl-4">
                        <div class="top_matches__clubname">
                          <div
                            class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                          >
                            <div class="d-flex align-items-center gap-1">
                              <img
                                :src="volta"
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
                              <div class="d-flex align-items-center gap-1">
                                <img
                                  :src="live"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                                <img
                                  :src="play"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                              </div>
                              <span class="fs-eight cpoint">66′ 1st half</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  :src="manchester"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint"
                                  >Manchester City</span
                                >
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  :src="united"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Man. United</span>
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
                              <span class="v-line lg d-none d-xl-block"></span>
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
                  <div class="top_matches__cmncard p2-bg p-4 rounded-3 mb-4">
                    <div class="row gx-0 gy-xl-0 gy-7">
                      <div class="col-xl-5 col-xxl-4">
                        <div class="top_matches__clubname">
                          <div
                            class="top_matches__cmncard-right d-flex align-items-start justify-content-between pb-4 mb-4 gap-4"
                          >
                            <div class="d-flex align-items-center gap-1">
                              <img
                                :src="volta"
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
                              <div class="d-flex align-items-center gap-1">
                                <img
                                  :src="live"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                                <img
                                  :src="play"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                              </div>
                              <span class="fs-eight cpoint">56′ 2nd half</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  :src="tigres"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint"
                                  >CF Tigres UANL</span
                                >
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  :src="america"
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
                              <span class="v-line lg d-none d-xl-block"></span>
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
                                        <span class="fw-bold d-block">-</span>
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >2</span
                                        >
                                        <span class="fw-bold d-block">-</span>
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >3</span
                                        >
                                        <span class="fw-bold d-block">-</span>
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
                                        <span class="fw-bold d-block">-</span>
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >2</span
                                        >
                                        <span class="fw-bold d-block">-</span>
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >3</span
                                        >
                                        <span class="fw-bold d-block">-</span>
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
                                        <span class="fw-bold d-block">-</span>
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >2</span
                                        >
                                        <span class="fw-bold d-block">-</span>
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >3</span
                                        >
                                        <span class="fw-bold d-block">-</span>
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
                                :src="volta"
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
                              <div class="d-flex align-items-center gap-1">
                                <img
                                  :src="live"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                                <img
                                  :src="play"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                              </div>
                              <span class="fs-eight cpoint">56′ 2nd half</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  :src="tigres"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint"
                                  >CF Tigres UANL</span
                                >
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  :src="america"
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
                              <span class="v-line lg d-none d-xl-block"></span>
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
                                        <span class="fw-bold d-block">-</span>
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >2</span
                                        >
                                        <span class="fw-bold d-block">-</span>
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >3</span
                                        >
                                        <span class="fw-bold d-block">-</span>
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
                                        <span class="fw-bold d-block">-</span>
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >2</span
                                        >
                                        <span class="fw-bold d-block">-</span>
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >3</span
                                        >
                                        <span class="fw-bold d-block">-</span>
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
                                        <span class="fw-bold d-block">-</span>
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >2</span
                                        >
                                        <span class="fw-bold d-block">-</span>
                                      </div>
                                      <div
                                        class="top_matches__innercount-item clickable-active py-1 px-10 rounded-3 n11-bg text-center"
                                      >
                                        <span
                                          class="fs-seven d-block mb-2 text-nowrap"
                                          >3</span
                                        >
                                        <span class="fw-bold d-block">-</span>
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
                                :src="volta"
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
                              <div class="d-flex align-items-center gap-1">
                                <img
                                  :src="live"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                                <img
                                  :src="play"
                                  width="{16}"
                                  height="{16}"
                                  alt="Icon"
                                />
                              </div>
                              <span class="fs-eight cpoint">56′ 2nd half</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  :src="tigres"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint"
                                  >CF Tigres UANL</span
                                >
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  :src="america"
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
                              <span class="v-line lg d-none d-xl-block"></span>
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
import liveMatch from "@/assets/images/icon/live-match.png";
import volta from "@/assets/images/icon/fifa-volta.png";
import chart from "@/assets/images/icon/line-chart.png";
import star from "@/assets/images/icon/star2.png";
import live from "@/assets/images/icon/live.png";
import play from "@/assets/images/icon/play.png";
import tigres from "@/assets/images/icon/cf-ttigres-uanl.png";
import america from "@/assets/images/icon/club-america.png";
import mainz from "@/assets/images/icon/mainz.png";
import borussia from "@/assets/images/icon/borussia-bortmund.png";
import manchester from "@/assets/images/icon/manchester-city.png";
import united from "@/assets/images/icon/man-united.png";
</script>

<style scoped></style>
