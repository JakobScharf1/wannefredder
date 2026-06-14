<template>
    <div class="row">
        <div v-for="(item, index) in counterData.slice(0,3)" :key="index" class="col-lg-4 col-6 mt-4">
            <div class="counter-box text-center">
                <div class="position-relative d-flex justify-content-center">
                    <i :data-feather="item.icon" class="fea icon-lg mb-3 text-primary"></i>

                    <div class="position-absolute top-0 translate-middle p-3 bg-soft-primary rounded-circle"></div>
                </div>
                <h2 class="mb-0 text-dark fw-semibold"><count-up :end-val="item.value" class="d-inline"/>{{item.symbol}}</h2>
                <h6 class="counter-head text-muted fw-medium mb-0">{{item.title}}</h6>
            </div>
        </div>
    </div>
</template>

<script setup>
import { counterData } from '@/data/data';
import CountUp from 'vue-countup-v3'

</script>

<style lang="scss" scoped>

</style>