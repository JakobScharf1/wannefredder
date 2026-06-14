<template>
    <div class="row align-items-center g-4">
        <div v-for="(item, index) in data" :key="index" class="col-lg-3 col-md-6 col-12">
            <div class="card team team-primary shadow text-center mb-5">
                <div class="card-img team-image d-inline-block mx-auto rounded overflow-hidden">
                    <img :src="item.image" class="img-fluid" alt="">

                    <ul class="list-unstyled team-social mb-0">
                        <li v-for="(el, index) in item.social" :key="index" class="mt-1"><router-link to="#" class="btn btn-sm btn-pills btn-icon"><i :data-feather="el" class="icons fea-social"></i></router-link></li>
                    </ul>
                </div>

                <div class="content bg-white mx-4 p-4 z-1 rounded shadow">
                    <router-link to="#" class="text-dark h5 mb-0 title">{{item.name}}</router-link>
                    <h6 class="text-muted mb-0 fw-normal">{{item.position}}</h6>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { ref } from 'vue'
    import team1 from '@/assets/images/team/01.jpg'
    import team2 from '@/assets/images/team/02.jpg'
    import team3 from '@/assets/images/team/03.jpg'
    import team4 from '@/assets/images/team/04.jpg'

    let data = ref([
        {
            image:team1,
            name:'Jack John',
            position:'Doctor',
            social:['facebook','instagram','twitter']
        },
        {
            image:team2,
            name:'Jeremiah Green',
            position:'Doctor',
            social:['facebook','instagram','twitter']
        },
        {
            image:team3,
            name:'Christina Vasquez',
            position:'Doctor',
            social:['facebook','instagram','twitter']
        },
        {
            image:team4,
            name:'Lillian Boldt',
            position:'Doctor',
            social:['facebook','instagram','twitter']
        },
    ])
</script>
