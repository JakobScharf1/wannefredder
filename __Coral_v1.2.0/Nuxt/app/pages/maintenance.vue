<template>
    <section class="bg-home d-flex align-items-center" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
        <div class="bg-overlay bg-gradient-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="d-flex flex-column min-vh-100 justify-content-center p-md-5">
                        <div class="text-center">
                            <NuxtLink to="/"><img :src="logo" alt=""/></NuxtLink>
                        </div>
                        <div class="title-heading text-center my-auto">
                            <div class="row justify-content-center g-4">
                                <div class="col-md-12 text-center">
                                    <h2 class="title-dark text-white text-uppercase mt-2 mb-4 fw-semibold">Maintenance</h2>
                                    <p class="text-white-50 para-desc para-dark mx-auto">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                                </div>
                            </div>
            
                            <div class="row my-4">
                                <div class="col-md-12 text-center">
                                    <div class="text-center">
                                        <span id="maintenance" class="timer"></span><span class="d-block h6 text-uppercase text-white title-dark">Minutes</span>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="subscribe-form">
                                        <form class="mx-auto">
                                            <input name="email" id="email" type="email" class="rounded-pill bg-white" required="" placeholder="Your email :">
                                            <button type="submit" class="btn btn-primary rounded-pill">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="mb-0 text-white-50">© {{year}} Coral. Design & Develop with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import bg from '@/assets/images/hero/special.jpg'
import logo from '@/assets/images/logo-icon-80-white.png'

 import { ref, onMounted } from 'vue';

    let timer = ref(60 * 60) // 1 hour in seconds
    let minutes = ref('')
    let seconds = ref('')

    onMounted(() => {
        const display = document.querySelector('#maintenance')
        setInterval(() => {
            minutes.value = String(Math.floor(timer.value / 60)).padStart(2, '0')
            seconds.value = String(timer.value % 60).padStart(2, '0')
            display.textContent = `${minutes.value}:${seconds.value}`
            timer.value--
            if (timer.value < 0) {
                timer.value = 60 * 60
            }
        }, 1000)
    }) 

 const year = ref(new Date().getFullYear())

</script>