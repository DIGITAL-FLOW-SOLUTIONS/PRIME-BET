<script setup lang="ts">
import { onBeforeUnmount, onMounted, ref } from "vue";
import SideNav from "./SideNav.vue";
import {
  IconAdjustmentsHorizontal,
  IconGift,
  IconUserCircle,
  IconX,
} from "@tabler/icons-vue";
import NavItem from "./NavItem.vue";
import HeaderThreeChat from "./HeaderThreeChat.vue";

import logo from "@/assets/images/logo.png";
import logoText from "@/assets/images/logo-text.png";

const isCardExpanded = ref(false);
const isMiddleExpanded = ref(false);

const toggleCard = () => {
  isCardExpanded.value = !isCardExpanded.value;
};

const toggleMiddle = () => {
  isMiddleExpanded.value = !isMiddleExpanded.value;
};

const handleClickOutside = (event: MouseEvent) => {
  const target = event.target as HTMLElement;
  if (isCardExpanded.value && !target.closest(".navbar-toggler")) {
    isCardExpanded.value = false;
  }
};

const handleClickOutsideMiddle = (event: MouseEvent) => {
  const target = event.target as HTMLElement;
  if (isMiddleExpanded.value && !target.closest(".left-nav-icon")) {
    isMiddleExpanded.value = false;
  }
};

onMounted(() => {
  document.body.addEventListener("click", handleClickOutside);
  document.body.addEventListener("click", handleClickOutsideMiddle);
});

onBeforeUnmount(() => {
  document.body.removeEventListener("click", handleClickOutside);
  document.body.removeEventListener("click", handleClickOutsideMiddle);
});
</script>

<template>
  <div>
    <header class="header-section2 header-section">
      <nav
        class="navbar navbar-expand-lg position-relative py-md-3 py-lg-6 workready"
      >
        <div
          class="collapse navbar-collapse justify-content-between hide"
          :class="{ show: isCardExpanded }"
          id="navbar-content"
        >
          <ul
            class="navbar-nav2fixed navbar-nav d-flex align-items-lg-center gap-4 gap-sm-5 py-2 py-lg-0 align-self-center p2-bg"
          >
            <NavItem />
            <li class="dropdown show-dropdown d-block d-sm-none">
              <div class="d-flex align-items-center flex-wrap gap-3">
                <router-link
                  to="/login"
                  class="cmn-btn second-alt px-xxl-11 rounded-2"
                  >Log In</router-link
                >
                <router-link to="/create-acount" class="cmn-btn px-xxl-11"
                  >Sign Up</router-link
                >
              </div>
            </li>
          </ul>
        </div>
        <div
          class="right-area custom-pos custom-postwo position-relative d-flex gap-3 gap-xl-7 align-items-center me-5 me-xl-10 align-items-center"
        >
          <div class="text-end d-none d-sm-block">
            <span class="fs-seven mb-1 d-block">Your balance</span>
            <span class="fw-bold d-block">$0.22</span>
          </div>
          <button
            class="cmn-btn px-xxl-6 d-none d-sm-block d-lg-none d-xxl-block"
          >
            Deposit
          </button>
          <div class="d-flex align-items-center gap-2 mt-1">
            <button
              type="button"
              class="py-1 px-2 n11-bg rounded-5 position-relative"
            >
              <IconGift height="24" width="24" class="fs-four" />
              <span
                class="fs-eight g1-bg px-1 rounded-5 position-absolute end-0 top-0"
                >2</span
              >
            </button>
            <div class="cart-area search-area d-flex">
              <HeaderThreeChat />
              <button type="button" class="py-1 px-2 n11-bg rounded-5">
                <IconUserCircle
                  height="24"
                  width="24"
                  class="ti ti-user-circle fs-four"
                />
              </button>
            </div>
          </div>
          <button
            @click="toggleCard"
            class="navbar-toggler navbar-toggler-two mt-1 mt-sm-2 mt-lg-0"
            type="button"
            data-bs-toggle="collapse"
            aria-label="Navbar Toggler"
            data-bs-target="#navbar-content"
            aria-expanded="true"
            id="nav-icon3"
          >
            <span></span><span></span><span></span><span></span>
          </button>
        </div>
      </nav>
      <div id="div10" class="navigation left-nav-area box3 position-fixed">
        <div
          class="logo-area slide-toggle3 trader-list position-fixed top-0 d-flex align-items-center justify-content-center pt-6 pt-md-8 gap-sm-4 gap-md-5 gap-lg-7 px-4 px-lg-8"
        >
          <i
            class="ti ti-menu-deep left-nav-icon n8-color order-2 order-lg-0 d-none"
          >
          </i>
          <router-link
            class="navbar-brand d-center text-center gap-1 gap-lg-2 ms-lg-4"
            to="/"
          >
            <img
              class="logo"
              width="{32}"
              height="{34}"
              :src="logo"
              alt="Logo"
            />
            <img
              class="logo d-none d-xl-block"
              width="{64}"
              height="{24}"
              :src="logoText"
              alt="Logo"
            />
          </router-link>
        </div>
        <div id="div10" class="navigation left-nav-area box3 position-fixed">
          <div
            class="logo-area slide-toggle3 trader-list position-fixed top-0 d-flex align-items-center justify-content-center pt-6 pt-md-8 gap-sm-4 gap-md-5 gap-lg-7 px-4 px-lg-8"
          >
            <i
              class="ti ti-menu-deep left-nav-icon n8-color order-2 order-lg-0 d-none"
            >
            </i>
            <router-link
              class="navbar-brand d-center text-center gap-1 gap-lg-2 ms-lg-4"
              to="/"
            >
              <img
                class="logo"
                width="{32}"
                height="{34}"
                :src="logo"
                alt="Logo"
              />
              <img
                class="logo d-none d-xl-block"
                width="{64}"
                height="{24}"
                :src="logoText"
                alt="Logo"
              />
            </router-link>
          </div>
          <div
            class="nav_aside px-5 p2-bg"
            :class="isMiddleExpanded ? 'show' : 'hide'"
          >
            <div class="nav-clsoeicon d-flex justify-content-end">
              <IconX
                @click="toggleMiddle"
                width="32"
                height="32"
                class="left-nav-icon n8-color order-2 order-lg-0 d-block d-lg-none fs-three"
              />
            </div>
            <SideNav />
          </div>
        </div>
      </div>
    </header>
    <button
      @click="toggleMiddle"
      type="button"
      class="middle-iconfixed position-fixed top-50 start-0 left-nav-icon"
    >
      <IconAdjustmentsHorizontal
        width="38"
        height="38"
        class="ti ti-adjustments-horizontal n8-color d-block d-lg-none fs-two"
      />
    </button>
  </div>
</template>

<style scoped></style>
