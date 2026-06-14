<template>
    <div>
        <NavLight/>

         <section class="bg-half-170 d-table w-100" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <span class="badge bg-primary">Slider</span>
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark mt-4">The Ultimate Summer Hat Guide</h5>

                            <ul class="list-inline text-center mb-0">
                                <li class="list-inline-item mx-4 mt-4">
                                    <span class="text-white-50 d-block">Author</span>
                                    <NuxtLink to="#" class="text-white title-dark">Coral</NuxtLink>
                                </li>

                                <li class="list-inline-item mx-4 mt-4">
                                    <span class="text-white-50 d-block">Date</span>
                                    <span class="text-white title-dark">15th July 2025</span>
                                </li>

                                <li class="list-inline-item mx-4 mt-4">
                                    <span class="text-white-50 d-block">Read Time</span>
                                    <span class="text-white title-dark">5 min read</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="position-middle-bottom">
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                            <li class="breadcrumb-item"><NuxtLink to="/">Coral</NuxtLink></li>
                            <li class="breadcrumb-item"><NuxtLink to="/blogs">Blogs</NuxtLink></li>
                            <li class="breadcrumb-item active" aria-current="page">The Ultimate Summer Hat Guide</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

         <section class="section">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8 col-md-7">
                        <div class="card border-0 shadow rounded overflow-hidden">
                            <div class="card-body p-0">
                                <div id="carouselExampleInterval" class="carousel slide mb-4 m-4" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img :src="blog1" class="d-block w-100 rounded shadow" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img :src="blog2" class="d-block w-100 rounded shadow" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img :src="blog3" class="d-block w-100 rounded shadow" alt="...">
                                        </div>
                                    </div>

                                    <NuxtLink class="carousel-control-prev" to="#carouselExampleInterval" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </NuxtLink>
                                    <NuxtLink class="carousel-control-next" to="#carouselExampleInterval" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </NuxtLink>
                                </div>
                                
                                <BlogDesc/>
                            </div>
                        </div>

                        <BlogComment/>
                    </div>

                    <div class="col-lg-4 col-md-5 col-12">
                        <BlogsSidebar/>
                    </div>
                </div>
            </div>
        </section>

        <FooterOne/>

        <ScrollToTop/>

    </div>
</template>

<script setup>
    import bg from '@/assets/images/hero/pages.jpg'
    import blog1 from '@/assets/images/blog/1.jpg'
    import blog2 from '@/assets/images/blog/2.jpg'
    import blog3 from '@/assets/images/blog/3.jpg'

    import NavLight from '@/components/navbar/nav-light.vue';
    import BlogsSidebar from '@/components/blog/blogs-sidebar.vue';
</script>