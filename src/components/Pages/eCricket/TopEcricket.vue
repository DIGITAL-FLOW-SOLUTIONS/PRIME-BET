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
                                >International(5 overs)</span
                              >
                            </div>
                            <div
                              class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                            >
                              <img
                                :src="live"
                                width="{16}"
                                height="{16}"
                                alt="icon"
                              />
                              <img
                                :src="play"
                                width="{16}"
                                height="{16}"
                                alt="icon"
                              />
                              <span class="fs-eight cpoint">1 INN, 0.5 OV</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  class="rounded-5"
                                  :src="australia"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Australia</span>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  class="rounded-5"
                                  :src="united"
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
                              <span class="v-line lg d-none d-xl-block"></span>
                              <div class="d-flex flex-column gap-5">
                                <img
                                  class="cpoint"
                                  :src="chart"
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
                                    <span class="fs-eight">Total runs </span>
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
                                >International(5 overs)</span
                              >
                            </div>
                            <div
                              class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                            >
                              <img
                                :src="live"
                                width="{16}"
                                height="{16}"
                                alt="icon"
                              />
                              <img
                                :src="play"
                                width="{16}"
                                height="{16}"
                                alt="icon"
                              />
                              <span class="fs-eight cpoint">1 INN, 0.5 OV</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  class="rounded-5"
                                  :src="australia"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Australia</span>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  class="rounded-5"
                                  :src="united"
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
                              <span class="v-line lg d-none d-xl-block"></span>
                              <div class="d-flex flex-column gap-5">
                                <img
                                  class="cpoint"
                                  :src="chart"
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
                                    <span class="fs-eight">Total runs </span>
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
                                >International (5 overs)</span
                              >
                            </div>
                            <div
                              class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                            >
                              <img
                                :src="live"
                                width="{16}"
                                height="{16}"
                                alt="icon"
                              />
                              <img
                                :src="play"
                                width="{16}"
                                height="{16}"
                                alt="icon"
                              />
                              <span class="fs-eight cpoint">1 INN, 0.5 OV</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  :src="vasco"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint"
                                  >CR Vasco da Gama RJ</span
                                >
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  :src="corinthians"
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
                                    <span class="fs-eight">Total runs</span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">PAK total runs</span>
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
                                >International(5 overs)</span
                              >
                            </div>
                            <div
                              class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                            >
                              <img
                                :src="live"
                                width="{16}"
                                height="{16}"
                                alt="icon"
                              />
                              <img
                                :src="play"
                                width="{16}"
                                height="{16}"
                                alt="icon"
                              />
                              <span class="fs-eight cpoint">1 INN, 0.5 OV</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  class="rounded-5"
                                  :src="australia"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Australia</span>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  class="rounded-5"
                                  :src="united"
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
                              <span class="v-line lg d-none d-xl-block"></span>
                              <div class="d-flex flex-column gap-5">
                                <img
                                  class="cpoint"
                                  :src="chart"
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
                                    <span class="fs-eight">Winner </span>
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
                                >International (5 overs)</span
                              >
                            </div>
                            <div
                              class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                            >
                              <img
                                :src="live"
                                width="{16}"
                                height="{16}"
                                alt="icon"
                              />
                              <img
                                :src="play"
                                width="{16}"
                                height="{16}"
                                alt="icon"
                              />
                              <span class="fs-eight cpoint">1 INN, 0.5 OV</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  :src="vasco"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint"
                                  >CR Vasco da Gama RJ</span
                                >
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  :src="corinthians"
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
                                    <span class="fs-eight">Total runs</span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">PAK total runs</span>
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
                                >International (5 overs)</span
                              >
                            </div>
                            <div
                              class="d-flex align-items-center gap-2 pe-xl-19 flex-nowrap flex-xl-wrap"
                            >
                              <img
                                :src="live"
                                width="{16}"
                                height="{16}"
                                alt="icon"
                              />
                              <img
                                :src="play"
                                width="{16}"
                                height="{16}"
                                alt="icon"
                              />
                              <span class="fs-eight cpoint">1 INN, 0.5 OV</span>
                            </div>
                          </div>
                          <div
                            class="top_matches__cmncard-left d-flex align-items-center justify-content-between pe-xl-10"
                          >
                            <div>
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  :src="vasco"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint"
                                  >CR Vasco da Gama RJ</span
                                >
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  :src="corinthians"
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
                                    <span class="fs-eight">Total runs</span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">PAK total runs</span>
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
import king from "@/assets/images/icon/king.png";
import live from "@/assets/images/icon/live.png";
import chart from "@/assets/images/icon/line-chart.png";
import star from "@/assets/images/icon/star2.png";
import play from "@/assets/images/icon/play.png";
import cricket from "@/assets/images/icon/cricket.png";
import australia from "@/assets/images/icon/australia.png";
import united from "@/assets/images/icon/united-arab.png";
import vasco from "@/assets/images/icon/cr-vasco.png";
import corinthians from "@/assets/images/icon/sc-corinthians.png";
</script>

<style scoped></style>
