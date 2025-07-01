<template>
  <HeaderThree />
  <router-view />
  <FooterCard />
  <MainFooter />
</template>

<script setup lang="ts">
import FooterCard from '../components/Shared/FooterCard.vue';
import HeaderThree from '../components/Shared/HeaderThree.vue';
import MainFooter from '../components/Shared/MainFooter.vue';
</script>

<style scoped></style>
