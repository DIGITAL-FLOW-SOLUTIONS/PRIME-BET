<template>
  <div class="pay_method__paymethod p-4 p-lg-6 p2-bg rounded-8">
    <div
      class="pay_method__paymethod-title d-flex align-items-center gap-3 mb-6 mb-md-8"
    >
      <IconBellRinging width="28" height="28" class="fs-four" />
      <h5 class="n10-color">Notifications settings</h5>
    </div>
    <div
      class="pay_method__Notiitem d-flex align-items-center gap-3 justify-content-between align-items-center pb-5 pb-md-6 mb-5 mb-md-6"
    >
      <div class="pay_method__Notiitem-text">
        <h6 class="mb-3">Email Notifications</h6>
        <span class="fs-seven n4-color"
          >Receive weekly email notifications.</span
        >
      </div>
      <div class="pay_method__Notiitem-switcher">
        <label class="switch">
          <input type="checkbox" />
          <div class="slider">
            <div class="circle"></div>
          </div>
        </label>
      </div>
    </div>
    <div
      class="pay_method__Notiitem d-flex align-items-center gap-3 justify-content-between align-items-center pb-5 pb-md-6 mb-5 mb-md-6"
    >
      <div class="pay_method__Notiitem-text">
        <h6 class="mb-3">Phone Notifications</h6>
        <span class="fs-seven n4-color"
          >Receive weekly Phone notifications.</span
        >
      </div>
      <div class="pay_method__Notiitem-switcher">
        <label class="switch">
          <input type="checkbox" />
          <div class="slider">
            <div class="circle"></div>
          </div>
        </label>
      </div>
    </div>
    <div
      class="pay_method__Notiitem d-flex align-items-center gap-3 justify-content-between align-items-center pb-5 pb-md-6 mb-5 mb-md-6"
    >
      <div class="pay_method__Notiitem-text">
        <h6 class="mb-3">New tasks</h6>
        <span class="fs-seven n4-color"
          >Receive weekly New tasks notifications.</span
        >
      </div>
      <div class="pay_method__Notiitem-switcher">
        <label class="switch">
          <input type="checkbox" />
          <div class="slider">
            <div class="circle"></div>
          </div>
        </label>
      </div>
    </div>
    <div
      class="pay_method__Notiitem d-flex align-items-center gap-3 justify-content-between align-items-center pb-5 pb-md-6 mb-5 mb-md-6"
    >
      <div class="pay_method__Notiitem-text">
        <h6 class="mb-3">Billing and payments</h6>
        <span class="fs-seven n4-color"
          >Lorem ipsum dolor sit amet consectetur. Id.</span
        >
      </div>
      <div class="pay_method__Notiitem-switcher">
        <label class="switch">
          <input type="checkbox" />
          <div class="slider">
            <div class="circle"></div>
          </div>
        </label>
      </div>
    </div>
    <div
      class="pay_method__Notiitem d-flex align-items-center gap-3 justify-content-between align-items-center border-0"
    >
      <div class="pay_method__Notiitem-text">
        <h6 class="mb-3">Updates and announcements</h6>
        <span class="fs-seven n4-color"
          >Lorem ipsum dolor sit amet consectetur.</span
        >
      </div>
      <div class="pay_method__Notiitem-switcher">
        <label class="switch">
          <input type="checkbox" />
          <div class="slider">
            <div class="circle"></div>
          </div>
        </label>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { IconBellRinging } from "@tabler/icons-vue";
</script>

<style scoped></style>
