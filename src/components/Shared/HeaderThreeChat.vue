<script setup lang="ts">
import { IconMessageDots } from "@tabler/icons-vue";
import { ref } from "vue";

import flores from "@/assets/images/flores.png";
import miles from "@/assets/images/miles.png";
import nguyen from "@/assets/images/nguyen.png";
import cooper from "@/assets/images/cooper.png";
import etiam from "@/assets/images/etiam-consequat.png";
import henry from "@/assets/images/henry-arthur.png";
import convallis from "@/assets/images/convallis.png";
import discot from "@/assets/images/discot.png";

const isCardExpanded = ref(false);

const mesgToggleCard = () => {
  isCardExpanded.value = !isCardExpanded.value;
};
</script>

<template>
  <div class="cmn-head">
    <button
      @click="mesgToggleCard"
      type="button"
      aria-label="Shopping Button"
      class="common_toggles2 py-1 px-2 n11-bg rounded-5 position-relative"
    >
      <IconMessageDots height="24" width="24" class="slide-toggle2 fs-four" />
      <span class="fs-eight g1-bg px-1 rounded-5 position-absolute end-0 top-0"
        >2</span
      >
    </button>
    <div
      class="cmns_msgarea msg_area common_area2 p2-bg rounded-2"
      :class="isCardExpanded ? '' : 'massagearashow'"
    >
      <div
        class="cmns_msgarea__head d-flex align-items-center justify-content-between gap-5 n11-bg px-6 py-2"
      >
        <div class="d-flex align-items-center gap-2">
          <button type="button">
            <IconMenu2
              height="24"
              width="24"
              class="ti ti-menu-2 fs-four n5-color"
            />
          </button>
          <h5 class="fs-five">Chat</h5>
        </div>
        <div @click="mesgToggleCard" class="common_toggles3">
          <IconX class="ti ti-x fs-four cpoint n5-color" />
        </div>
      </div>
      <div class="cmns_msgarea__body p-5 p-md-6">
        <div class="d-flex align-items-start gap-4 mb-4">
          <div class="cmns_msgarea__head-thumb">
            <img
              class="rounded-5"
              :src="flores"
              height="{30}"
              width="{30}"
              alt="Icon"
            />
          </div>
          <div class="cmns_msgarea__head-conent">
            <div class="d-flex align-items-center gap-2">
              <h6>Flores, Juanita</h6>
              <span class="n3-color seven">Dec 30 21:28</span>
            </div>
            <p>
              Etiam consequat tellus sem, eget ullamcorper arcu convallis eu.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start gap-4 mb-4">
          <div class="cmns_msgarea__head-thumb">
            <img
              class="rounded-5"
              :src="miles"
              height="{30}"
              width="{30}"
              alt="Icon"
            />
          </div>
          <div class="cmns_msgarea__head-conent">
            <div class="d-flex align-items-center gap-2">
              <h6>Miles, Esther</h6>
              <span class="n3-color seven">Aug 15 10:29</span>
            </div>
            <p>
              Etiam consequat tellus sem, eget ullamcorper arcu convallis eu.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start gap-4 mb-4">
          <div class="cmns_msgarea__head-thumb">
            <img
              class="rounded-5"
              :src="nguyen"
              height="{30}"
              width="{30}"
              alt="Icon"
            />
          </div>
          <div class="cmns_msgarea__head-conent">
            <div class="d-flex align-items-center gap-2">
              <h6>Nguyen, Shane</h6>
              <span class="n3-color seven">Apr 11 18:30</span>
            </div>
            <p>
              Etiam consequat tellus sem, eget ullamcorper arcu convallis eu.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start gap-4 mb-4">
          <div class="cmns_msgarea__head-thumb">
            <img
              class="rounded-5"
              :src="cooper"
              height="{30}"
              width="{30}"
              alt="Icon"
            />
          </div>
          <div class="cmns_msgarea__head-conent">
            <div class="d-flex align-items-center gap-2">
              <h6>Cooper, Kristin</h6>
              <span class="n3-color seven">Apr 11 18:30</span>
            </div>
            <p>
              Etiam consequat tellus sem, eget ullamcorper arcu convallis eu.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start gap-4 mb-4">
          <div class="cmns_msgarea__head-thumb">
            <img
              class="rounded-5"
              :src="miles"
              height="{30}"
              width="{30}"
              alt="Icon"
            />
          </div>
          <div class="cmns_msgarea__head-conent">
            <div class="d-flex align-items-center gap-2">
              <h6>Miles, Esther</h6>
              <span class="n3-color seven">May 22 04:43</span>
            </div>
            <p class="mb-2">
              Etiam consequat tellus sem, eget ullamcorper arcu convallis eu.
            </p>
            <img
              :src="etiam"
              height="{500}"
              width="{287}"
              alt="Icon"
            />
          </div>
        </div>
        <div class="d-flex align-items-start gap-4 mb-4">
          <div class="cmns_msgarea__head-thumb">
            <img
              class="rounded-5"
              :src="henry"
              height="{30}"
              width="{30}"
              alt="Icon"
            />
          </div>
          <div class="cmns_msgarea__head-conent">
            <div class="d-flex align-items-center gap-2">
              <h6>Nguyen, Shane</h6>
              <span class="n3-color seven">Jul 25 17:09</span>
            </div>
            <p>
              Etiam consequat tellus sem, eget ullamcorper arcu convallis eu.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start gap-4 mb-4">
          <div class="cmns_msgarea__head-thumb">
            <img
              class="rounded-5"
              :src="nguyen"
              height="{30}"
              width="{30}"
              alt="Icon"
            />
          </div>
          <div class="cmns_msgarea__head-conent">
            <div class="d-flex align-items-center gap-2">
              <h6>Henry, Arthur</h6>
              <span class="n3-color seven">Sep 4 06:53</span>
            </div>
            <p>
              Etiam consequat tellus sem, eget ullamcorper arcu convallis eu.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start gap-4 mb-4">
          <div class="cmns_msgarea__head-thumb">
            <img
              class="rounded-5"
              :src="henry"
              height="{30}"
              width="{30}"
              alt="Icon"
            />
          </div>
          <div class="cmns_msgarea__head-conent">
            <div class="d-flex align-items-center gap-2">
              <h6>Henry, Arthur</h6>
              <span class="n3-color seven">May 22 04:43</span>
            </div>
            <p class="mb-2">
              Etiam consequat tellus sem, eget ullamcorper arcu convallis eu.
            </p>
            <img
              :src="etiam"
              height="{349}"
              width="{186}"
              alt="Icon"
            />
          </div>
        </div>
        <div class="d-flex align-items-start gap-4 mb-4">
          <div class="cmns_msgarea__head-thumb">
            <img
              class="rounded-5"
              :src="flores"
              height="{30}"
              width="{30}"
              alt="Icon"
            />
          </div>
          <div class="cmns_msgarea__head-conent">
            <div class="d-flex align-items-center gap-2">
              <h6>Flores, Juanita</h6>
              <span class="n3-color seven">Jul 25 17:09</span>
            </div>
            <p>
              Etiam consequat tellus sem, eget ullamcorper arcu convallis eu.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start gap-4 mb-4">
          <div class="cmns_msgarea__head-thumb">
            <img
              class="rounded-5"
              :src="henry"
              height="{30}"
              width="{30}"
              alt="Icon"
            />
          </div>
          <div class="cmns_msgarea__head-conent">
            <div class="d-flex align-items-center gap-2">
              <h6>Nguyen, Shane</h6>
              <span class="n3-color seven">Jul 25 17:09</span>
            </div>
            <p>
              Etiam consequat tellus sem, eget ullamcorper arcu convallis eu.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start gap-4 mb-4">
          <div class="cmns_msgarea__head-thumb">
            <img
              class="rounded-5"
              :src="nguyen"
              height="{30}"
              width="{30}"
              alt="Icon"
            />
          </div>
          <div class="cmns_msgarea__head-conent">
            <div class="d-flex align-items-center gap-2">
              <h6>Henry, Arthur</h6>
              <span class="n3-color seven">May 22 04:43</span>
            </div>
            <p class="mb-2">
              Etiam consequat tellus sem, eget ullamcorper arcu convallis eu.
            </p>
            <img
              :src="convallis"
              height="{349}"
              width="{186}"
              alt="Icon"
            />
          </div>
        </div>
        <div class="d-flex align-items-start gap-4 mb-4">
          <div class="cmns_msgarea__head-thumb">
            <img
              class="rounded-5"
              :src="discot"
              height="{30}"
              width="{30}"
              alt="Icon"
            />
          </div>
          <div class="cmns_msgarea__head-conent">
            <div class="d-flex align-items-center gap-2">
              <h6>Nguyen, Shane</h6>
              <span class="n3-color seven">Jul 25 17:09</span>
            </div>
            <p>
              Etiam consequat tellus sem, eget ullamcorper arcu convallis eu.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start gap-4 mb-4">
          <div class="cmns_msgarea__head-thumb">
            <img
              class="rounded-5"
              :src="henry"
              height="{30}"
              width="{30}"
              alt="Icon"
            />
          </div>
          <div class="cmns_msgarea__head-conent">
            <div class="d-flex align-items-center gap-2">
              <h6>Black, Marvin</h6>
              <span class="n3-color seven">Jun 23 14:31</span>
            </div>
            <p>
              Etiam consequat tellus sem, eget ullamcorper arcu convallis eu.
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start gap-4 mb-4">
          <div class="cmns_msgarea__head-thumb">
            <img
              class="rounded-5"
              :src="flores"
              height="{30}"
              width="{30}"
              alt="Icon"
            />
          </div>
          <div class="cmns_msgarea__head-conent">
            <div class="d-flex align-items-center gap-2">
              <h6>Flores, Juanita</h6>
              <span class="n3-color seven">Jan 31 09:53</span>
            </div>
            <p>
              Etiam consequat tellus sem, eget ullamcorper arcu convallis eu.
            </p>
          </div>
        </div>
      </div>
      <div
        class="cmns_msgarea__footer py-4 py-md-5 px-5 px-md-6 position-absolute bottom-0 n11-bg w-100"
      >
        <form
          class="d-flex align-items-center justify-content-end flex-wrap flex-sm-nowrap gap-2 gap-sm-5 w-100"
        >
          <div
            class="cmns_msgarea__footer-fileup d-flex align-items-center py-1 pe-3 gap-sm-1"
          >
            <input type="text" placeholder="Send message" />
            <label>
              <IconPhotoPlus
                width="{24}"
                height="{24}"
                class="ti ti-photo-plus fs-four cpoint"
              />
            </label>
            <input class="d-none" type="file" id="img" />
            <span>
              <IconAt
                width="{24}"
                height="{24}"
                class="ti ti-at fs-four cpoint"
              />
            </span>
            <label>
              <IconFileTypePdf
                width="{24}"
                height="{24}"
                class="ti ti-file-type-pdf fs-four cpoint"
              />
            </label>
            <input class="d-none" type="file" id="pdf" />
            <span
              ><IconMoodHappy
                width="{24}"
                height="{24}"
                class="ti ti-mood-happy fs-four cpoint"
            /></span>
            <button class="py-3 px-5 g1-bg rounded-8">
              <IconSend width="{24}" height="{24}" class="ti ti-send fs-four" />
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<style scoped></style>
