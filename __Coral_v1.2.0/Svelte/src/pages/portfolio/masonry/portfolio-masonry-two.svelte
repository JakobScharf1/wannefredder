<script>
// @ts-nocheck

    import Navlight from "../../../components/navbar/navlight.svelte";
    import bg from '../../../assets/images/hero/pages.jpg'
    import { Link } from "svelte-routing";
    import { masonaryData } from "../../../data/data";
    import Footer from "../../../components/footer.svelte";
    import { onMount } from "svelte";
    import Tobii from 'tobii';

    let tobii;

    onMount(() => {
        tobii = new Tobii();
    });
</script>

<Navlight/>

<section class="bg-half-170 d-table w-100" style="background: url({bg}) center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Portfolio</h5>
                </div>
            </div>
        </div>

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><Link to="/">Coral</Link></li>
                    <li class="breadcrumb-item"><a href="#!">Portfolio</a></li>
                    <li class="breadcrumb-item"><a href="#!">masonry</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Two Columns</li>
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
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="column-2 gap-4">
                    {#each masonaryData as item}
                        <div class="mb-4">
                            <div class="portfolio masonry rounded shadow position-relative overflow-hidden">
                                <div class="position-relative overflow-hidden image">
                                    <img src={item.image} class="img-fluid" alt="">
                                    <div class="position-absolute start-0 end-0 top-0 bottom-0 overlay rounded bg-primary m-4"></div>
                                </div>
    
                                <div class="content">
                                    <div class="title-body p-3 position-absolute start-0 end-0 m-4">
                                        <a href="#!" class="text-white fs-5 fw-medium">{item.title}</a>
                                        <p class="text-white-50 mb-0">{item.name}</p>
                                    </div>

                                    <div class="p-3 position-absolute top-0 end-0 m-4">
                                        <a href={item.image} data-tobii class="btn btn-sm btn-icon btn-pills btn-primary lightbox" aria-label="link"><i data-feather="camera" class="fea icon-sm"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/each}
                </div>
            </div>
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