<template>
    <div>
        <NavLight/>

        <section class="bg-half-170 d-table w-100" :style="{backgroundImage:`url(${bg})`, backgroundPosition:'center'}">
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="title-heading text-center">
                            <span class="badge bg-primary">Blockquote</span>
                            <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark mt-4">You can choose between multiple languages</h5>

                            <ul class="list-inline text-center mb-0">
                                <li class="list-inline-item mx-4 mt-4">
                                    <span class="text-white-50 d-block">Author</span>
                                    <router-link to="#" class="text-white title-dark">Coral</router-link>
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
                            <li class="breadcrumb-item"><router-link to="/">Coral</router-link></li>
                            <li class="breadcrumb-item"><router-link to="/blogs">Blogs</router-link></li>
                            <li class="breadcrumb-item active" aria-current="page">You can choose between multiple languages</li>
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
                                <div class="bg-soft-primary p-4 rounded shadow text-center m-4">
                                    <div class="position-relative">
                                        <div class="blog-line border border-top rounded-0 position-absolute top-50 w-100"></div>
                                        <div class="p-3 rounded-circle d-inline-flex bg-white z-1 position-relative"><i class="mdi mdi-24px mdi-format-quote-open lh-1"></i></div>
                                    </div>

                                    <div class="py-3 px-lg-4 my-2">
                                        <p class="text-dark fst-italic h4 mb-0">“ I'm selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can't handle me at my worst, then you sure as hell don't deserve me at my best. ”</p>
                                        <h6 class="mb-0 mt-3"> - Marilyn Monroe</h6>
                                    </div>

                                    <div class="position-relative">
                                        <div class="blog-line border border-top rounded-0 position-absolute top-50 w-100"></div>
                                        <div class="p-3 rounded-circle d-inline-flex bg-white z-1 position-relative"><i class="mdi mdi-24px mdi-format-quote-close lh-1"></i></div>
                                    </div>
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
import NavLight from '@/components/navbar/nav-light.vue';
import bg from '@/assets/images/hero/pages.jpg'
import BlogsSidebar from '@/components/blog/blogs-sidebar.vue';
import BlogComment from '@/components/blog/blog-comment.vue';
import BlogDesc from '@/components/blog/blog-desc.vue';
import FooterOne from '@/components/footer-one.vue';
import ScrollToTop from '@/components/scroll-to-top.vue';

</script>
