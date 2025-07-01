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
              :src="resetImage"
              alt="Image"
            />
          </div>
        </div>
        <div class="col-lg-6 col-xl-5">
          <div class="login_section__loginarea">
            <div class="row justify-content-start">
              <div class="col-xxl-10">
                <div class="pb-10 pt-8 mb-7 mt-12 mt-lg-0 px-4 px-sm-10">
                  <h3 class="mb-6 mb-md-8">Reset Password</h3>
                  
                  <p class="mb-10 mb-md-15">
                    Enter your new password below
                  </p>

                  <div class="login_section__form">
                    <form @submit.prevent="handleSubmit">
                      <div class="mb-5 mb-md-6">
                        <input
                          v-model="password"
                          class="n11-bg w-100"
                          placeholder="New Password"
                          type="password"
                          required
                          minlength="8"
                        />
                      </div>
                      <div class="mb-5 mb-md-6">
                        <input
                          v-model="confirmPassword"
                          class="n11-bg w-100"
                          placeholder="Confirm New Password"
                          type="password"
                          required
                          minlength="8"
                        />
                      </div>
                      
                      <div v-if="errorMessage" class="alert alert-danger mb-3">
                        {{ errorMessage }}
                      </div>
                      <div v-if="successMessage" class="alert alert-success mb-3">
                        {{ successMessage }}
                      </div>
                      
                      <button
                        class="cmn-btn px-5 py-3 mb-6 w-100"
                        type="submit"
                        :disabled="isLoading"
                      >
                        <span v-if="isLoading" class="spinner-border spinner-border-sm me-2"></span>
                        {{ isLoading ? 'Resetting...' : 'Reset Password' }}
                      </button>
                    </form>
                  </div>

                  <div class="text-center mt-4">
                    <router-link class="g1-color" to="/login">
                      Remember your password? Login
                    </router-link>
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
import { ref } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import resetImage from '@/assets/images/reset-password.png';

const route = useRoute();
const router = useRouter();

const password = ref('');
const confirmPassword = ref('');
const isLoading = ref(false);
const errorMessage = ref('');
const successMessage = ref('');

const handleSubmit = async () => {
  if (password.value !== confirmPassword.value) {
    errorMessage.value = 'Passwords do not match';
    return;
  }

  if (password.value.length < 8) {
    errorMessage.value = 'Password must be at least 8 characters';
    return;
  }

  isLoading.value = true;
  errorMessage.value = '';
  successMessage.value = '';

  try {
    const token = route.query.token?.toString() || '';
    
    if (!token) {
      throw new Error('Missing password reset token');
    }

    const response = await fetch('http://localhost/primebet/api/reset-password.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        token,
        password: password.value,
        confirmPassword: confirmPassword.value
      })
    });

    const data = await response.json();

    if (!response.ok) {
      throw new Error(data.message || 'Failed to reset password');
    }

    successMessage.value = data.message || 'Password has been reset successfully';
    
    setTimeout(() => {
      router.push('/login');
    }, 3000);
  } catch (error) {
    errorMessage.value = error.message || 'An error occurred. Please try again.';
  } finally {
    isLoading.value = false;
  }
};
</script>

<style scoped>
.alert {
  border-radius: 8px;
  padding: 12px;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
}

.cmn-btn {
  background-color: #4e73df;
  color: white;
  border: none;
  font-weight: 500;
}

.cmn-btn:hover {
  background-color: #3a5ec2;
}

.spinner-border {
  width: 1.5rem;
  height: 1.5rem;
  border-width: 0.2em;
}

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.15em;
}

.g1-color {
  color: #4e73df;
  text-decoration: none;
}

.g1-color:hover {
  text-decoration: underline;
}
</style>