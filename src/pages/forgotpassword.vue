<template>
  <section class="login_section pt-120 p3-bg">
    <div class="container-fluid">
      <div class="row justify-content-between align-items-center">
        <div class="col-6">
          <div class="login_section__thumb d-none d-lg-block">
            <img
              class="w-100"
              width="720"
              height="900"
              :src="login"
              alt="Image"
            />
          </div>
        </div>
        <div class="col-lg-6 col-xl-5">
          <div class="login_section__loginarea">
            <div class="row justify-content-start">
              <div class="col-xxl-10">
                <div class="pb-10 pt-8 mb-7 mt-12 mt-lg-0 px-4 px-sm-10">
                  <h3 class="mb-6 mb-md-8">Forgot Password</h3>
                  <p class="mb-10 mb-md-15">
                    Enter your email address and we'll send you a link to reset your password.
                  </p>

                  <div class="login_section__form">
                    <form @submit.prevent="handleSubmit">
                      <div class="mb-5 mb-md-6">
                        <input
                          v-model="email"
                          class="n11-bg"
                          placeholder="Email"
                          type="email"
                          required
                        />
                      </div>
                      
                      <div v-if="errorMessage" class="text-danger mb-3">
                        {{ errorMessage }}
                      </div>
                      <div v-if="successMessage" class="text-success mb-3">
                        {{ successMessage }}
                      </div>
                      
                      <button
                        class="cmn-btn px-5 py-3 mb-6 w-100"
                        type="submit"
                        :disabled="isLoading"
                      >
                        {{ isLoading ? 'Sending...' : 'Send Reset Link' }}
                      </button>
                    </form>
                  </div>
                  <span class="d-center gap-1">
                    Remember your password?
                    <router-link class="g1-color" to="/login">Login</router-link>
                  </span>
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
import { ref } from 'vue';
import login from "@/assets/images/login.png";

const email = ref('');
const isLoading = ref(false);
const errorMessage = ref('');
const successMessage = ref('');

const handleSubmit = async () => {
  try {
    isLoading.value = true;
    errorMessage.value = '';
    successMessage.value = '';

    const response = await fetch('http://localhost/primebet/api/forgot-password.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ email: email.value })
    });

    // First check if response is JSON
    const contentType = response.headers.get('content-type');
    if (!contentType || !contentType.includes('application/json')) {
      throw new Error('Server returned invalid response');
    }

    const data = await response.json();

    if (!response.ok) {
      throw new Error(data.message || 'Failed to send reset link');
    }

    successMessage.value = data.message;
  } catch (error) {
    errorMessage.value = error.message || 'Network error. Please try again.';
  } finally {
    isLoading.value = false;
  }
};
</script>

<style scoped>
.text-danger {
  color: #dc3545;
  padding: 8px 0;
}

.text-success {
  color: #28a745;
  padding: 8px 0;
}
</style>