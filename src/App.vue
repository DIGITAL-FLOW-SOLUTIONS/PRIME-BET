<script setup lang="ts">
import MainLayout from "./Layouts/MainLayout.vue";
</script>

<template>
  <component :is="$route.meta.layout || MainLayout">
    <RouterView />
  </component>
</template>
