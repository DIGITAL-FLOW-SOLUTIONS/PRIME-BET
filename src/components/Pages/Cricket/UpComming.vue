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
                              <span class="fs-eight cpoint">T20 World Cup</span>
                            </div>
                            <div
                              class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                            >
                              <span class="fs-eight cpoint">Today 13:30</span>
                              <img
                                :src="updown"
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
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  class="rounded-5"
                                  :src="rwanda"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Rwanda</span>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  class="rounded-5"
                                  :src="tanzania"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Tanzania</span>
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
                              <span class="fs-eight cpoint">T20 World Cup</span>
                            </div>
                            <div
                              class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                            >
                              <span class="fs-eight cpoint">Today 13:30</span>
                              <img
                                :src="updown"
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
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  class="rounded-5"
                                  :src="rwanda"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Rwanda</span>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  class="rounded-5"
                                  :src="tanzania"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Tanzania</span>
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
                              <span class="fs-eight cpoint">T20 World Cup</span>
                            </div>
                            <div
                              class="d-flex align-items-center gap-4 pe-xl-15 flex-nowrap flex-xl-wrap"
                            >
                              <span class="fs-eight cpoint">Today 13:30</span>
                              <img
                                :src="updown"
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
                              <div class="d-flex align-items-center gap-2 mb-4">
                                <img
                                  class="rounded-5"
                                  :src="rwanda"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Rwanda</span>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <img
                                  class="rounded-5"
                                  :src="tanzania"
                                  width="{24}"
                                  height="{24}"
                                  alt="Icon"
                                />
                                <span class="fs-seven cpoint">Tanzania</span>
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
                              <img
                                :src="updown"
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
                                    <span class="fs-eight">Draw no bet </span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">First innings</span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">First over 96</span>
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
                              <img
                                :src="updown"
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
                                    <span class="fs-eight">Draw no bet </span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">First innings</span>
                                  </th>
                                  <th scope="col">
                                    <span class="fs-eight">First over 96</span>
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
                              <img
                                :src="updown"
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
                              <img
                                :src="updown"
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
import cricket from "@/assets/images/icon/cricket.png";
import chart from "@/assets/images/icon/line-chart.png";
import updown from "@/assets/images/icon/updwon.png";
import star from "@/assets/images/icon/star.png";
import queensland from "@/assets/images/icon/queensland.png";
import australia from "@/assets/images/icon/western-australia.png";
import rwanda from "@/assets/images/icon/rwanda.png";
import tanzania from "@/assets/images/icon/tanzania.png";
</script>

<style scoped></style>
