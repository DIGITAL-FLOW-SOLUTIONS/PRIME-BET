<template>
  <HeaderTwo />
  <router-view />
  <FooterCard />
  <MainFooter />
</template>

<script setup lang="ts">
import FooterCard from "../components/Shared/FooterCard.vue";
import HeaderTwo from "../components/Shared/HeaderTwo.vue";
import MainFooter from "../components/Shared/MainFooter.vue";
</script>
