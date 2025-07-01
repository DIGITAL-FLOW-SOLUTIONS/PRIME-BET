<template>
  <Header />
  <router-view />
  <FooterCard />
  <MainFooter />
</template>

<script setup lang="ts">
import FooterCard from "../components/Shared/FooterCard.vue";
import Header from "../components/Shared/Header.vue";
import MainFooter from "../components/Shared/MainFooter.vue";
</script>
