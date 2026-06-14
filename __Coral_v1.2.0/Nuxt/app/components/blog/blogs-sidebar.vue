<template>
    <div class="card bg-white p-4 rounded shadow sticky-bar">
        <div>
            <h6 class="pt-2 pb-2 bg-light rounded text-center">Search</h6>

            <div class="search-bar mt-4">
                <div id="itemSearch" class="menu-search mb-0">
                    <form role="search" method="get" id="searchItemform" class="searchform">
                        <input type="text" class="form-control rounded border" name="s" id="searchItem" placeholder="Search...">
                        <input type="submit" id="searchItemsubmit" value="Search">
                        <i data-feather="search" class="icons"></i>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <h6 class="pt-2 pb-2 bg-light rounded text-center">Recent Post</h6>
            <div class="mt-4">
                <div v-for="(item, index) in recentPost" :key="index" class="blog blog-primary d-flex align-items-center mt-3">
                    <img :src="item.image" class="avatar avatar-small rounded" style="width: auto;" alt=""/>
                    <div class="flex-1 ms-3">
                        <NuxtLink to="#" class="d-block title text-dark fw-medium">{{item.title}}</NuxtLink>
                        <span class="text-muted small">{{item.date}}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 text-center">
            <h6 class="pt-2 pb-2 bg-light rounded">Tags Cloud</h6>
            <ul class="tagcloud list-unstyled mt-4">
                <li v-for="(item, index) in blogTag" :key="index" class="d-inline-flex m-1"><NuxtLink to="#" class="rounded fw-medium text-dark py-1 px-2">{{item}}</NuxtLink></li>
            </ul>
        </div>
    </div>
</template>

<script setup>
    import { blogTag, recentPost } from '@/data/data';
</script>