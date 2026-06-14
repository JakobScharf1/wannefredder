<template>
    <section class="cta-video-section position-relative">
        <video class="" autoplay loop>
            <source :src="video" type="video/mp4">
        </video>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-10">
                    <div class="position-relative z-1 p-4 rounded shadow bg-white">
                        <div class="tiny-single-item">
                            <div v-for="(item, index) in clientData" :key="index" class="tiny-slide">
                                <div class="position-relative overflow-hidden">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="mb-0">{{item.tag}}</h6>

                                        <ul class="list-unstyled mb-0 text-warning">
                                            <li v-for="(el, index) in item.rate" :key="index" class="list-inline-item"><i :class="el"></i></li>
                                        </ul>
                                    </div>

                                    <p class="text-muted fst-italic mt-2">{{item.desc}}</p>

                                    <div class="d-flex align-items-center">
                                        <img :src="item.image" class="avatar avatar-small rounded-pill shadow" alt="">
                                        <div class="ms-2">
                                            <h6 class="text-dark small mb-0">{{item.name}}</h6>
                                            <small class="text-muted d-block">{{item.position}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <i class="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
    import { clientData } from '@/data/data';
    import video from '@/assets/images/video.mp4'

    import { onMounted } from 'vue';
    import { tns } from 'tiny-slider/src/tiny-slider';

    onMounted(()=>{
        tns({
            container: '.tiny-single-item',
            items: 1,
            controls: false,
            mouseDrag: true,
            loop: true,
            rewind: true,
            autoplay: true,
            autoplayButtonOutput: false,
            autoplayTimeout: 3000,
            speed: 400,
            gutter: 0,
            nav:false
        });
    })

</script>