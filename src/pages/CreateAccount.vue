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
              :src="createAccount"
              alt="Image"
            />
          </div>
        </div>
        <div class="col-lg-6 col-xl-5">
          <div class="login_section__loginarea">
            <div class="row justify-content-start">
              <div class="col-xxl-10">
                <div class="pb-10 pt-8 mb-7 mt-12 mt-lg-0 px-4 px-sm-10">
                  <h3 class="mb-6 mb-md-8">Create new account.</h3>
                  <p class="mb-10 mb-md-15">
                    Welcome to PRIMEBET! Let's get you started
                    <p>Sign Up</p>
                  </p>

                  <div class="login_section__form">
                    <form @submit.prevent="handleSubmit">
                      <div class="mb-5 mb-md-6">
                        <input 
                          v-model="formData.fullName"
                          class="n11-bg" 
                          placeholder="Full Name" 
                          type="text" 
                          required
                        />
                      </div>
                      <div class="mb-5 mb-md-6">
                        <input
                          v-model="formData.phone"
                          ref="phoneInput" 
                          class="n11-bg" 
                          placeholder="000 000 000" 
                          type="tel"
                          required
                        />
                      </div>
                      <div class="mb-5 mb-md-6">
                        <input 
                          v-model="formData.email"
                          class="n11-bg" 
                          placeholder="Email" 
                          type="email"
                          required
                        />
                      </div>
                      <div class="mb-5 mb-md-6">
                        <input 
                          v-model="formData.password"
                          class="n11-bg" 
                          placeholder="Password" 
                          type="password"
                          required
                        />
                      </div>
                      <div class="mb-5 mb-md-6">
                        <input 
                          v-model="formData.confirmPassword"
                          class="n11-bg" 
                          placeholder="Confirm Password" 
                          type="password"
                          required
                        />
                      </div>
                      <div class="d-flex align-items-center flex-wrap flex-sm-nowrap gap-2 mb-6">
                        <input 
                          v-model="formData.agreeTerms"
                          type="checkbox" 
                          required
                        />
                        <span>
                          I agree to all statements with
                          <router-link to="#">Terms of Use</router-link>
                        </span>
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
                        {{ isLoading ? 'Processing...' : 'Sign Up Now' }}
                      </button>
                    </form>
                  </div>
                  <span class="d-center gap-1">
                    Already a member?
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
import { ref, onMounted } from 'vue';
import createAccount from '@/assets/images/create-acount.png';
import intlTelInput from 'intl-tel-input';
import 'intl-tel-input/build/css/intlTelInput.css';

const phoneInput = ref<HTMLInputElement | null>(null);
const iti = ref<any>(null);
const formData = ref({
  fullName: '',
  phone: '',
  email: '',
  password: '',
  confirmPassword: '',
  agreeTerms: false
});
const isLoading = ref(false);
const errorMessage = ref('');
const successMessage = ref('');

onMounted(() => {
  if (phoneInput.value) {
    iti.value = intlTelInput(phoneInput.value, {
      initialCountry: 'ke',
      utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
      separateDialCode: true,
      preferredCountries: ['ke', 'us', 'gb', 'in', 'fr', 'de', 'jp', 'cn'],
      dropdownContainer: document.body,
      autoPlaceholder: 'aggressive',
    }as any);
  }
});

const handleSubmit = async () => {
  try {
    const phoneNumber = iti.value?.getNumber() || formData.value.phone;
    
    const response = await fetch('http://localhost/primebet/api/register.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        fullName: formData.value.fullName,
        phone: phoneNumber,
        email: formData.value.email,
        password: formData.value.password,
        confirmPassword: formData.value.confirmPassword
      })
    });

    const data = await response.json();
    
    if (!response.ok) throw new Error(data.message || 'Registration failed');
    
    // Success case
    successMessage.value = data.message;
    
  } catch (error) {
    console.error('Registration error:', error);
    errorMessage.value = error.message || 'An error occurred. Please try again.';
  }
};
</script>

