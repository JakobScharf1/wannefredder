<script>
    import bg from "../../assets/images/hero/pages.jpg";
    import { Link } from "svelte-routing";
    import NftNavlight from "../../components/navbar/nft-navlight.svelte";
    import { nftData } from "../../data/data";
    import Footer from "../../components/footer.svelte";

</script>
<NftNavlight/>

<section class="bg-half-170 d-table w-100" style="background: url({bg}) center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Collection</h5>
                </div>
            </div>
        </div>

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><Link to="/">Coral</Link></li>
                    <li class="breadcrumb-item active" aria-current="page">Collection</li>
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
            {#each nftData as item}
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

        <div class="row">
            <div class="col-12 mt-4">
                <ul class="pagination justify-content-center mb-0">
                    <li class="page-item">
                        <a class="page-link" href="#!" aria-label="Previous">
                            <span aria-hidden="true"><i class="mdi mdi-chevron-left align-middle fs-6"></i></span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#!" aria-label="Next">
                            <span aria-hidden="true"><i class="mdi mdi-chevron-right align-middle fs-6"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<Footer/>