<template>
    <div class="row g-4">
        <div class="col-md-4">
            <ul class="nav nav-pills nav-justified flex-column mb-0 sticky-bar" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <router-link class="nav-link rounded shadow active" id="mondayschedule" data-bs-toggle="pill" to="#monday" role="tab" aria-controls="monday" aria-selected="false">
                        <div class="text-center py-1">
                            <h6 class="mb-0">Monday</h6>
                        </div>
                    </router-link>
                </li>
                
                <li class="nav-item mt-2">
                    <router-link class="nav-link rounded shadow" id="tuesdayschedule" data-bs-toggle="pill" to="#tuesday" role="tab" aria-controls="tuesday" aria-selected="false">
                        <div class="text-center py-1">
                            <h6 class="mb-0">Tuesday</h6>
                        </div>
                    </router-link>
                </li>
                
                <li class="nav-item mt-2">
                    <router-link class="nav-link rounded shadow" id="wednesdayschedule" data-bs-toggle="pill" to="#wednesday" role="tab" aria-controls="wednesday" aria-selected="false">
                        <div class="text-center py-1">
                            <h6 class="mb-0">Wednesday</h6>
                        </div>
                    </router-link>
                </li>
                
                <li class="nav-item mt-2">
                    <router-link class="nav-link rounded shadow" id="thursdayschedule" data-bs-toggle="pill" to="#thursday" role="tab" aria-controls="thursday" aria-selected="false">
                        <div class="text-center py-1">
                            <h6 class="mb-0">Thursday</h6>
                        </div>
                    </router-link>
                </li>
                
                <li class="nav-item mt-2">
                    <router-link class="nav-link rounded shadow" id="fridayschedule" data-bs-toggle="pill" to="#friday" role="tab" aria-controls="friday" aria-selected="false">
                        <div class="text-center py-1">
                            <h6 class="mb-0">Friday</h6>
                        </div>
                    </router-link>
                </li>
                
                <li class="nav-item mt-2">
                    <router-link class="nav-link rounded shadow" id="saturdayschedule" data-bs-toggle="pill" to="#saturday" role="tab" aria-controls="saturday" aria-selected="false">
                        <div class="text-center py-1">
                            <h6 class="mb-0">Saturday</h6>
                        </div>
                    </router-link>
                </li>
            </ul>
        </div>

        <div class="col-md-8 col-12">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="mondayschedule">
                    <div class="table-responsive bg-white shadow rounded">
                        <table class="table mb-0 table-center">
                            <tbody>
                                <tr v-for="(item, index) in data" :key="index">
                                    <td class="p-4 fw-medium" style="max-width: 100px;">{{item.time}}</td>
                                    <td class="p-4" style="min-width: 300px;">
                                        <div class="d-flex">
                                            <img :src="item.image" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="ms-3">
                                                <h6 class="text-dark mb-0 d-block">{{item.title}}</h6>
                                                <small class="text-muted">{{item.name}}</small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesdayschedule">
                    <div class="table-responsive bg-white shadow rounded">
                        <table class="table mb-0 table-center">
                            <tbody>
                                <tr v-for="(item, index) in data.slice(0,5)" :key="index">
                                    <td class="p-4 fw-medium" style="max-width: 100px;">{{item.time}}</td>
                                    <td class="p-4" style="min-width: 300px;">
                                        <div class="d-flex">
                                            <img :src="item.image" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="ms-3">
                                                <h6 class="text-dark mb-0 d-block">{{item.title}}</h6>
                                                <small class="text-muted">{{item.name}}</small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesdayschedule">
                    <div class="table-responsive bg-white shadow rounded">
                        <table class="table mb-0 table-center">
                            <tbody>
                                <tr v-for="(item, index) in data.slice(0,5)" :key="index">
                                    <td class="p-4 fw-medium" style="max-width: 100px;">{{item.time}}</td>
                                    <td class="p-4" style="min-width: 300px;">
                                        <div class="d-flex">
                                            <img :src="item.image" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="ms-3">
                                                <h6 class="text-dark mb-0 d-block">{{item.title}}</h6>
                                                <small class="text-muted">{{item.name}}</small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursdayschedule">
                    <div class="table-responsive bg-white shadow rounded">
                        <table class="table mb-0 table-center">
                            <tbody>
                                <tr v-for="(item, index) in data.slice(0,4)" :key="index">
                                    <td class="p-4 fw-medium" style="max-width: 100px;">{{item.time}}</td>
                                    <td class="p-4" style="min-width: 300px;">
                                        <div class="d-flex">
                                            <img :src="item.image" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="ms-3">
                                                <h6 class="text-dark mb-0 d-block">{{item.title}}</h6>
                                                <small class="text-muted">{{item.name}}</small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="fridayschedule">
                    <div class="table-responsive bg-white shadow rounded">
                        <table class="table mb-0 table-center">
                            <tbody>
                                <tr v-for="(item, index) in data.slice(0,6)" :key="index">
                                    <td class="p-4 fw-medium" style="max-width: 100px;">{{item.time}}</td>
                                    <td class="p-4" style="min-width: 300px;">
                                        <div class="d-flex">
                                            <img :src="item.image" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="ms-3">
                                                <h6 class="text-dark mb-0 d-block">{{item.title}}</h6>
                                                <small class="text-muted">{{item.name}}</small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="saturday" role="tabpanel" aria-labelledby="saturdayschedule">
                    <div class="table-responsive bg-white shadow rounded">
                        <table class="table mb-0 table-center">
                            <tbody>
                                <tr v-for="(item, index) in data.slice(0,3)" :key="index">
                                    <td class="p-4 fw-medium" style="max-width: 100px;">{{item.time}}</td>
                                    <td class="p-4" style="min-width: 300px;">
                                        <div class="d-flex">
                                            <img :src="item.image" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="ms-3">
                                                <h6 class="text-dark mb-0 d-block">{{item.title}}</h6>
                                                <small class="text-muted">{{item.name}}</small>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import yoga1 from '@/assets/images/team/yoga1.jpg'
import yoga2 from '@/assets/images/team/yoga2.jpg'
import yoga3 from '@/assets/images/team/yoga3.jpg'
import yoga4 from '@/assets/images/team/yoga4.jpg'
import { ref } from 'vue'

let data = ref([
    {
        image:yoga1,
        time:'8:00AM',
        title:'Dhanurasana',
        name:'- Jack John'
    },
    {
        image:yoga2,
        time:'9:00AM',
        title:'Bhujangasana',
        name:'- Jeremiah Green'
    },
    {
        image:yoga3,
        time:'10:00AM',
        title:'Sirsasana',
        name:'- Christina Vasquez'
    },
    {
        image:yoga4,
        time:'11:00AM',
        title:'Padmasana',
        name:'- Lillian Boldt'
    },
    {
        image:yoga1,
        time:'12:00AM',
        title:'Utthita Parsvakonasana',
        name:'- Jack John'
    },
    {
        image:yoga2,
        time:'1:00PM',
        title:'Natarajasana',
        name:'- Jeremiah Green'
    },
    {
        image:yoga3,
        time:'2:00PM',
        title:'Halasana',
        name:'- Christina Vasquez'
    },
    {
        image:yoga4,
        time:'3:00PM',
        title:'Vajrasana',
        name:'- Lillian Boldt'
    },
])

</script>
