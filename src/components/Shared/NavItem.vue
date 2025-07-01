<template>
  <li
    v-for="navItemSingle in navItemData"
    :key="navItemSingle.id"
    class="dropdown show-dropdown"
  >
    <router-link
      :class="['navunik', isActive(navItemSingle.href) ? 'active' : '']"
      :to="navItemSingle.href"
    >
      {{ navItemSingle.linkText }}
    </router-link>
  </li>
</template>

<script setup lang="ts">
import { navItemData } from "../../assets/data/navData";
import { useRoute } from "vue-router";

const route = useRoute();
const isActive = (href: string) => {
  return route.path === href;
};
</script>

<style scoped></style>
