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
                            <h2 class="title-dark text-white text-uppercase mt-2 mb-4 fw-semibold">Comingsoon</h2>
                            <p class="text-white para-desc para-dark mx-auto">We've cultivated a dynamic space where creativity seamlessly intertwines with strategy and innovation.</p>
                        
                            <div id="countdown">
                                <ul class="count-down list-unstyled">
                                    <li id="days" class="count-number list-inline-item m-2">{{ days }}<p class="count-head">Days</p></li>
                                    <li id="hours" class="count-number list-inline-item m-2">{{ hours }}<p class="count-head">Hours</p></li>
                                    <li id="mins" class="count-number list-inline-item m-2">{{ minutes }}<p class="count-head">minutes</p></li>
                                    <li id="secs" class="count-number list-inline-item m-2">{{ seconds }}<p class="count-head">seconds</p></li>
                                    <li id="end" class="h1"></li>
                                </ul>
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
    import { ref, computed, onMounted } from 'vue'

    const year = ref(new Date().getFullYear())
    const now = ref(Date.now())
    const targetTime = ref(new Date("Sep 13 2025").getTime())
    const difference = ref(0)

    const days = computed(() => Math.floor(difference.value / (1000 * 60 * 60 * 24)))
    const hours = computed(() => 23 - new Date(now.value).getHours())
    const minutes = computed(() => 60 - new Date(now.value).getMinutes())
    const seconds = computed(() => 60 - new Date(now.value).getSeconds())

    function updateNow() {
        now.value = Date.now()
        difference.value = targetTime.value - now.value
    }

    onMounted(() => {
        updateNow()
        setInterval(updateNow, 1000)
    })
</script>