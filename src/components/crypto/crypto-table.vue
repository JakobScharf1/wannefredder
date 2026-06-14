<template>
    <div class="row justify-content-center">
        <div class="col-12 mt-4">
            <div class="table-responsive shadow rounded">
                <table class="table mb-0 table-center bg-white">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="min-width: 180px;">Name</th>
                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="min-width: 100px;">Symbol</th>
                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="width: 150px;">Price</th>
                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="width: 150px;">Change(%)</th>
                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="width: 150px;">Change($)</th>
                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="width: 150px;">Marketcap</th>
                            <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3 text-end" style="width: 100px;">Trade</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr v-for="(item, index) in cryptoData" :key="index">
                            <th class="p-3">
                                <div class="align-items-center">
                                    <img :src="item.image" class="me-2 avatar avatar-ex-small" alt="">
                                    <p class="mb-0 d-inline text-dark fw-normal h6">{{item.name1}}</p>
                                </div>
                            </th>
                            <td class="p-3 text-muted fw-medium">{{item.name2}}</td>
                            <td class="p-3 text-dark">{{item.price}}</td>
                            <td class="p-3" :class="item.text">{{item.change1}}</td>
                            <td class="p-3" :class="item.text">{{item.change2}}</td>
                            <td class="text-muted p-3">{{item.marketCap}}</td>
                            <td class="p-3 text-end"><router-link to="#" class="btn btn-sm btn-primary">Trade</router-link></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-4 text-center">
                <router-link to="#" class="btn btn-link primary fs-6">See More <i class="mdi mdi-arrow-right align-middle"></i></router-link>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { cryptoData } from '@/data/data';
</script>

<style lang="scss" scoped>

</style>