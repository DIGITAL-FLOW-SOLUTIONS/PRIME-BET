<script setup lang="ts">
import { ref } from "vue";
import { amountData } from "../../../assets/data/dashBoard";

const activeItem = ref();
const handleClick = (id: number) => {
  activeItem.value = id;
};
</script>

<template>
  <div class="pay_method__paymethod p-4 p-lg-6 p2-bg rounded-8">
    <div class="pay_method__paymethod-title mb-5 mb-md-6">
      <h5 class="n10-color">Choose deposit amount</h5>
    </div>
    <div class="pay_method__paymethod-alitem mb-5 mb-md-6">
      <div
        class="pay_method__paymethod-items d-flex align-items-center gap-4 gap-sm-5 gap-md-6"
      >
        <div
          v-for="{ amount, bonus, id } in amountData"
          :key="id"
          @click="() => handleClick(id)"
          class="pay_method__paymethod-item amount-active p-2 rounded-3 cpoint"
          :class="activeItem == id ? 'border-one' : ''"
        >
          <div class="py-3 px-5 px-md-6 n11-bg rounded-3">
            <span class="fs-ten fw-bold mb-2">{{ amount }}</span>
            <span class="fs-seven d-block">{{ bonus }}</span>
          </div>
        </div>
      </div>
    </div>
    <div class="text-end mb-6 mb-md-8">
      <span>Min 3,000 | Max € 3,060</span>
    </div>
    <div class="pay_method__paymethod-title mb-5 mb-md-6">
      <h5 class="n10-color">Enter your payment details</h5>
    </div>
    <div class="pay_method__formarea">
      <form>
        <div
          class="d-flex align-items-center flex-wrap flex-md-nowrap gap-5 gap-md-6 mb-5"
        >
          <div class="d-flex w-100 p1-bg ps-3 rounded-8">
            <div class="d-flex align-items-center w-100">
              <i class="ti ti-credit-card fs-five"></i>
              <input
                type="text"
                id="card_number"
                name="card_number"
                placeholder="Card number"
              />
            </div>
            <div class="d-flex align-items-center justify-content-end">
              <input
                class="w-75"
                type="text"
                id="expiration"
                name="expiration"
                placeholder="MM/YY CVC"
              />
            </div>
          </div>
          <div class="d-flex w-100 p1-bg rounded-8">
            <input type="text" placeholder="Street address" />
          </div>
        </div>
        <div
          class="d-flex align-items-center gap-5 gap-md-6 mb-5 flex-wrap flex-md-nowrap"
        >
          <div class="d-flex w-100 p1-bg rounded-8">
            <input
              type="text"
              placeholder="Apt, unit, suite, etc. (optional)"
            />
          </div>
          <div class="d-flex w-100 p1-bg rounded-8">
            <input type="text" placeholder="(+33)7 35 55 21 02" />
          </div>
        </div>
        <div
          class="d-flex align-items-center gap-5 gap-md-6 mb-5 flex-wrap flex-md-nowrap"
        >
          <div class="d-flex p1-bg rounded-8 w-100">
            <input type="text" placeholder="City" />
          </div>
          <div class="d-flex align-items-center gap-6 w-100">
            <div class="d-flex p1-bg rounded-8 w-50">
              <input type="text" placeholder="State" />
            </div>
            <div class="d-flex p1-bg rounded-8 w-50">
              <input type="text" placeholder="Zip code" />
            </div>
          </div>
        </div>
        <div
          class="d-flex align-items-center justify-content-between mb-7 mb-md-10"
        >
          <span>Total</span>
          <span>$3,000</span>
        </div>
        <button type="submit" class="py-4 px-5 n11-bg rounded-2 w-100">
          Deposit
        </button>
      </form>
    </div>
  </div>
</template>

<style scoped></style>
