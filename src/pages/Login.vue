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
                  <h3 class="mb-6 mb-md-8">Login</h3>
                  <p class="mb-10 mb-md-15">
                    Welcome back! Enter your email address and password to continue
                  </p>
                  <div class="login_section__form">
                    <form @submit.prevent="handleLogin">
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
                      <div v-if="errorMessage" class="text-danger mb-3">
                        {{ errorMessage }}
                      </div>
                      <span class="d-right gap-1">
                        <RouterLink class="g1-color" to="/forgotpassword">
                          Forgot your password?
                        </RouterLink>
                      </span>
                      <button
                        class="cmn-btn px-5 py-3 mb-6 w-100"
                        type="submit"
                        :disabled="isLoading"
                      >
                        {{ isLoading ? 'Logging in...' : 'Login' }}
                      </button>
                    </form>
                  </div>
                  <span class="d-center gap-1"
                    >Don't have an account yet?
                    <router-link class="g1-color" to="/create-acount"
                      >Sign Up Now</router-link
                    ></span
                  >
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
import { useRouter } from 'vue-router';
import login from "@/assets/images/login.png";

const router = useRouter();
const isLoading = ref(false);
const errorMessage = ref('');

const formData = ref({
  email: '',
  password: ''
});

const handleLogin = async () => {
  try {
    isLoading.value = true;
    errorMessage.value = '';

    const response = await fetch('http://localhost/primebet/api/login.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        email: formData.value.email,
        password: formData.value.password
      })
    });

    const data = await response.json();

    if (!data.success) {
      throw new Error(data.message || 'Login failed');
    }

    // Store user ID in localStorage
    localStorage.setItem('userId', data.userId);
    
    // Redirect to dashboard or home page
    router.push('/dashboard');
    
  } catch (error) {
    console.error('Login error:', error);
    errorMessage.value = error.message || 'An error occurred during login';
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
</style>