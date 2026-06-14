<script>
// @ts-nocheck

    import Navlight from "../../components/navbar/navlight.svelte";
    import bg from '../../assets/images/hero/pages.jpg'
    import { Link } from "svelte-routing";
    import SidebarBlog from "../../components/blog/sidebar-blog.svelte";
    import BlogComment from "../../components/blog/blog-comment.svelte";
    import BlogDesc from "../../components/blog/blog-desc.svelte";
    import Footer from "../../components/footer.svelte";
</script>
<Navlight/>

<section class="bg-half-170 d-table w-100" style="background: url({bg}) center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <span class="badge bg-primary">Coral</span>
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark mt-4">Pine Forest in Relaxing Nature Sounds Study</h5>

                    <ul class="list-inline text-center mb-0">
                        <li class="list-inline-item mx-4 mt-4">
                            <span class="text-white-50 d-block">Author</span>
                            <a href="#!" class="text-white title-dark">Coral</a>
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
                    <li class="breadcrumb-item"><Link to="/">Coral</Link></li>
                    <li class="breadcrumb-item"><Link to="/blogs">Blogs</Link></li>
                    <li class="breadcrumb-item active" aria-current="page">Pine Forest in Relaxing Nature Sounds Study</li>
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
            <div class="col-lg-8 col-md-7 mt-0">
               
                <div class="card border-0 shadow rounded overflow-hidden mt-4">
                    <div class="card-body">
                        <!-- svelte-ignore a11y_missing_attribute -->
                        <iframe src="https://www.youtube.com/embed/yba7hPeTSjk?feature=oembed" allow="autoplay; encrypted-media" style="height: 433px; width: 100%;" class="rounded shadow mb-4" allowfullscreen=""></iframe>

                        <BlogDesc/>
                    </div>
                </div>
                <BlogComment/>
            </div>

            <div class="col-lg-4 col-md-5 col-12">
                <SidebarBlog/>
            </div>
        </div>
    </div>
</section>

<Footer/>