<template>
    <section class="bg-home d-flex align-items-center" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
        <div class="bg-overlay bg-linear-gradient-2"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="p-4 bg-white rounded shadow-md mx-auto w-100" style="max-width: 400px;">
                        <form>
                            <router-link to="/"><img :src="logo" class="mb-4 d-block mx-auto" alt=""></router-link>
                            <h6 class="mb-3 text-uppercase fw-semibold">Please sign in</h6>
                        
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Your Email</label>
                                <input name="email" id="email" type="email" class="form-control" placeholder="example@website.com">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold" for="loginpass">Password</label>
                                <input type="password" class="form-control" id="loginpass" placeholder="Password">
                            </div>
                        
                            <div class="d-flex justify-content-between">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-label form-check-label text-muted" for="flexCheckDefault">Remember me</label>
                                    </div>
                                </div>
                                <span class="forgot-pass text-muted small mb-0"><router-link to="/reset-password" class="text-muted">Forgot password ?</router-link></span>
                            </div>
            
                            <button class="btn btn-primary w-100" type="submit">Sign in</button>

                            <div class="col-12 text-center mt-3">
                                <span><span class="text-muted me-2 small">Don't have an account ?</span> <router-link to="/signup" class="text-dark fw-semibold small">Sign Up</router-link></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>

import logo from '@/assets/images/logo-dark.png'
import bg from '@/assets/images/hero/auth.jpg'

</script>
