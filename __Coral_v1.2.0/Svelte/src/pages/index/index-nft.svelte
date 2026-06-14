<script>
    import { onMount } from "svelte";
    import { Link } from "svelte-routing";

	import { nftWork, nftData } from './../../data/data.js';
    
    import faqImage from '../../assets/images/faqs.svg'
    
    import { tns } from 'tiny-slider/src/tiny-slider';

    import NftNavdark from "../../components/navbar/nft-navdark.svelte";
    import ExploreProduct from "../../components/explore-product.svelte";
    import NftCta from '../../components/cta/nft-cta.svelte';
    import BlogOne from '../../components/blog-one.svelte';
    import FaqOne from '../../components/faq-one.svelte';
    import Footer from '../../components/footer.svelte';

    onMount(()=>{
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
            nav:false,
            speed: 400,
            gutter: 0,
        });
    })

</script>

<NftNavdark/>

<section class="bg-half-170 overflow-hidden">
    <span class="modern-app-round top-50 start-50 translate-middle"></span>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="title-heading">
                    <h1 class="heading mb-3">Discover and collect <span class="text-gradient-primary">extraordinary</span> NFT <span class="text-gradient-primary">artworks</span></h1>
                    <p class="para-desc text-muted">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                    <div class="mt-4 pt-2">
                        <Link to="/nft-explore" class="btn btn-primary me-1"><i class="mdi mdi-camera-outline align-middle"></i> Explore</Link>
                        <a href="#!" class="btn btn-soft-primary">Sell <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="position-relative">
                    <div class="tiny-single-item">
                        {#each nftData.slice(0,3) as item}
                            <div class="tiny-slide">
                                <div class="m-2">
                                    <div class="nft-item p-4 rounded shadow bg-white">
                                        <div class="position-relative">
                                            <div class="nft-image position-relative overflow-hidden rounded shadow">
                                                <img src={item.image} class="img-fluid" alt="">
                                                <div class="bg-overlay bg-black"></div>
                                                <div class="bid-button position-absolute top-50 translate-y-middle start-0 end-0 text-center">
                                                    <Link to="/nft-detail" class="btn btn-sm btn-primary me-1"><i data-feather="shopping-cart" class="fea icon-sm align-middle me-1"></i> Buy Now</Link>
                                                    <Link to="/nft-detail" class="btn btn-sm btn-primary"><i data-feather="zap" class="fea icon-sm align-middle me-1"></i> Bid Now</Link>
                                                </div>
                                            </div>
    
                                            <div class="position-absolute top-0 start-0 m-3">
                                                <Link to="/creator-profile"><img src={item.client} class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""></Link>
                                            </div>
                                        </div>
    
                                        <div class="content pt-4 position-relative">
                                            <Link to="/nft-detail" class="text-dark link-title h6">{item.name}</Link>
    
                                            <div class="d-flex justify-content-between mt-2">
                                                <span class="rate text-primary">{item.value}</span>
                                                <span class="text-dark">{item.item}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {/each}
                    </div>

                    <div class="position-absolute top-0 start-0 translate-middle z-n1">
                        <p class="avatar avatar-small bg-gradient-primary rounded mb-0 spin-anything" style="opacity: 0.1;"></p>
                    </div>

                    <div class="position-absolute top-100 start-100 translate-middle z-n1">
                        <p class="avatar avatar-small bg-gradient-primary rounded-pill mb-0 zoom-in-out" style="opacity: 0.1;"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section pt-0">
    <div class="container">
        <div class="row align-items-end mb-4 pb-2">
            <div class="col-md-8">
                <div class="section-title">
                    <h4 class="title mb-3">Explore Hot Products</h4>
                    <p class="text-muted mb-0">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="text-end d-md-block d-none">
                    <Link to="/nft-explore" class="btn btn-link primary text-dark">See More <i class="mdi mdi-arrow-right"></i></Link>
                </div>
            </div>
        </div>

        <ExploreProduct/>

        <div class="row">
            <div class="col">
                <div class="text-center d-md-none d-block">
                    <Link to="/nft-explore" class="btn btn-link primary text-dark">See More <i class="mdi mdi-arrow-right"></i></Link>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">How we works? : Coral</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            {#each nftWork as item}
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="position-relative features text-center p-4">
                        <div class="position-relative d-flex justify-content-center">
                            <i data-feather={item.icon} class="fea icon-md text-primary z-1"></i>
                            <div class="feature-icon bg-soft-primary position-absolute top-0 translate-middle"></div>
                        </div>
    
                        <div class="mt-4">
                            <Link to="service-detail" class="h5 text-dark link-title">Create Item</Link>
                            <p class="text-muted mt-3">Success needs hard work. Don't listen to these 'get rich quick' schemes.</p>
                            <Link to="service-detail" class="text-primary">Learn More <i class="mdi mdi-arrow-right align-middle"></i></Link>
                        </div>
                    </div>
                </div>
            {/each}
        </div>
    </div>
</section>

<NftCta/>

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Top Collections</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            {#each nftData.slice(0,4) as item}
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="nft-item nft-collection rounded shadow position-relative overflow-hidden">
                        <div class="nft-image">
                            <img src={item.image} class="img-fluid" alt="">
                        </div>

                        <div class="position-absolute bottom-0 start-0 end-0 bg-white p-4">
                            <div class="position-absolute top-0 start-50 translate-middle">
                                <img src={item.client} class="avatar avatar-small rounded-pill img-thumbnail shadow-md" alt="">
                            </div>

                            <div class="mt-4 text-center">
                                <Link to="/nft-explore" class="text-dark link-title h5">{item.tag}</Link>
                                
                                <p class="text-muted mb-0 small">27 Items</p>
                            </div>
                        </div>
                    </div>
                </div>
            {/each}
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="position-relative">
                    <img src={faqImage} class="img-fluid" alt="">

                    <div class="modern-app-round round-small"></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                <div class="section-title mb-4 ms-lg-3">
                    <h4 class="title mb-3">Frequently Asked Questions</h4>
                    <p class="text-muted para-desc mb-0">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                
                    <FaqOne/>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Blog Or News</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Welcome to the future, you can buy and sell awesome artworks form here. The world largest digital marketplace for non-fungible tokens.</p>
                </div>
            </div>
        </div>

        <BlogOne/>
    </div>
</section>

<Footer/>