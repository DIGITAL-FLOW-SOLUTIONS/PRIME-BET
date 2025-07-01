<script setup lang="ts">
import { ref } from "vue";
import { imagesData } from "../../../assets/data/dashBoard";

const activeItem = ref();
const handleClick = (id: number) => {
  activeItem.value = id;
};
</script>

<template>
  <div
    v-for="{ id, src, alt } in imagesData"
    :key="id"
    className="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 col-xxl-2"
  >
    <div
      @click="() => handleClick(id)"
      class="pay_method__paymethod-item pay-methods p-2 rounded-3 cpoint"
      :class="activeItem == id ? 'border-one' : ''"
    >
      <img :src="src" height="{70}" width="{172}" :alt="alt" />
    </div>
  </div>
</template>

<style scoped></style>
