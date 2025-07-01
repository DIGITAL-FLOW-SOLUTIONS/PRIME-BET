<script setup lang="ts">
import { onBeforeUnmount, onMounted, ref } from "vue";
import Language from "./Language.vue";
import NavItem from "./NavItem.vue";

import logo from "@/assets/images/logo.png";
import logoText from "@/assets/images/logo-text.png";

const isCardExpanded = ref(false);

const toggleCard = () => {
  isCardExpanded.value = !isCardExpanded.value;
};

const handleClickOutside = (event: MouseEvent) => {
  const target = event.target as HTMLElement;
  if (isCardExpanded.value && !target.closest(".navbar-toggler")) {
    isCardExpanded.value = false;
  }
};

onMounted(() => {
  document.body.addEventListener("click", handleClickOutside);
});

onBeforeUnmount(() => {
  document.body.removeEventListener("click", handleClickOutside);
});
</script>

<template>
  <header class="header-section2 header-section">
    <nav
      class="navbar navbar-expand-lg position-relative py-md-3 py-lg-6 workready"
    >
      <div
        class="collapse navbar-collapse justify-content-between"
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
        class="right-area custom-pos position-relative d-flex gap-0 gap-lg-7 align-items-center me-5 me-xl-10"
      >
        <Language />
        <router-link
          to="/login"
          class="cmn-btn second-alt px-xxl-11 rounded-2 me-5 me-lg-0 d-none d-sm-block"
          >Log In</router-link
        >
        <router-link
          to="/create-acount"
          class="cmn-btn d-none px-xxl-11 d-sm-block d-lg-none d-xl-block"
          >Sign Up</router-link
        >
      </div>
      <button
        @click="toggleCard"
        class="navbar-toggler mt-1 mt-sm-2 mt-lg-0"
        type="button"
        data-bs-toggle="collapse"
        aria-label="Navbar Toggler"
        data-bs-target="#navbar-content"
        aria-expanded="true"
        id="nav-icon3"
      >
        <span></span><span></span><span></span><span></span>
      </button>
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
    </div>
  </header>
</template>

<style scoped></style>
