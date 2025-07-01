<template>
  <div class="pay_method__paymethod p-4 p-lg-6 p2-bg rounded-8">
    <div class="pay_method__paymethod-title mb-5 mb-md-6">
      <h5 class="n10-color">About You</h5>
    </div>
    <div class="pay_method__formarea">
      <form>
        <div
          class="d-flex align-items-center flex-wrap flex-md-nowrap gap-5 gap-md-6 mb-5"
        >
          <div class="w-100">
            <label class="mb-3">First Name (Given Name)</label>
            <input
              class="n11-bg rounded-8"
              type="text"
              placeholder="First Name"
            />
          </div>
          <div class="w-100">
            <label class="mb-3">Last Name</label>
            <input
              class="n11-bg rounded-8"
              type="text"
              placeholder="Last Name"
            />
          </div>
        </div>
        <div
          class="d-flex align-items-center gap-5 gap-md-6 mb-5 flex-wrap flex-md-nowrap"
        >
          <div class="w-100">
            <label class="mb-3">Date Of Birth</label>
            <div class="d-flex align-items-center gap-6 w-100">
              <div class="d-flex n11-bg rounded-8 w-50">
                <input type="text" placeholder="12" />
              </div>
              <div class="d-flex n11-bg rounded-8 w-50">
                <input type="text" placeholder="09" />
              </div>
              <div class="d-flex n11-bg rounded-8 w-50">
                <input type="text" placeholder="1999" />
              </div>
            </div>
          </div>
          <div class="w-100">
            <label class="mb-3">Phone Number</label>
            <div class="d-flex gap-2">
              <input
                class="w-25 n11-bg rounded-8"
                type="text"
                placeholder="+962"
              />
              <input
                class="n11-bg rounded-8"
                type="text"
                placeholder="XX-XXX-XXXXX"
              />
            </div>
          </div>
        </div>
        <div
          class="d-flex align-items-center flex-wrap flex-md-nowrap gap-5 gap-md-6 mb-5"
        >
          <div class="w-100">
            <label class="mb-3">Address</label>
            <input
              class="n11-bg rounded-8"
              type="text"
              placeholder="Address..."
            />
          </div>
          <div class="w-100">
            <label class="mb-3 d-block">Male & Female</label>
            <select class="n11-bg extrastyle rounded-8 w-100 py-3 pe-5">
              <option class="p6-color" data-display="Male & Female...">
                Male & Female...
              </option>
              <option class="p6-color" value="1">Male</option>
              <option class="p6-color" value="2">Female</option>
            </select>
          </div>
        </div>
        <div
          class="d-flex align-items-center flex-wrap flex-md-nowrap gap-5 gap-md-6 mb-5"
        >
          <div class="w-100">
            <label class="mb-3">City / Region</label>
            <input
              class="n11-bg rounded-8"
              type="text"
              placeholder="City / Region..."
            />
          </div>
          <div class="w-100">
            <label class="mb-3">Country</label>
            <input
              class="n11-bg rounded-8"
              type="text"
              placeholder="United Kingdom"
            />
          </div>
        </div>
        <div class="d-flex gap-2 align-items-start align-items-xl-center mb-5">
          <input type="checkbox" id="demoCheckbox" name="checkbox" value="1" />
          <label for="demoCheckbox" class="fs-seven"
            >I authorize to collect and transmit my personal information for
            identity verification or
            <span class="g1-color"> similar uses as defined</span>
            in order to confirm my ability to use the website.</label
          >
        </div>
        <button class="cmn-btn py-3 px-10">Save</button>
      </form>
    </div>
  </div>
</template>

<script setup lang="ts"></script>

<style scoped></style>
