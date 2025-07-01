<template>
  <section class="Promotions pb-120">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 gx-0 gx-lg-4">
          <div class="Promotions__main">
            <div class="row w-100 gy-6">
              <div class="col-12">
                <h3>Promotions for you</h3>
              </div>

              <div
                class="col-xxl-6"
                v-for="{ id, imgSrc, title, bonusvalue } in promotionData"
                :key="id"
              >
                <div
                  class="Promotions__card d-flex align-items-center justify-content-center justify-content-sm-between flex-wrap flex-sm-nowrap gap-6 p-4 p-lg-10 rounded-8 p3-bg"
                >
                  <div class="Promotions__card-thumb text-center">
                    <img
                      :src="imgSrc"
                      width="{308}"
                      height="{203}"
                      alt="Icon"
                    />
                  </div>
                  <div
                    class="Promotions__card-content text-center text-sm-start"
                  >
                    <h3 class="mb-6">{{ title }}</h3>
                    <span class="fs-two mb-10 mb-md-15 d-block">{{
                      bonusvalue
                    }}</span>
                    <button type="button" class="cmn-btn px-5 py-3">
                      Get Bonus
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
import { promotionData } from "../assets/data/allPageData";
</script>

<style scoped></style>
