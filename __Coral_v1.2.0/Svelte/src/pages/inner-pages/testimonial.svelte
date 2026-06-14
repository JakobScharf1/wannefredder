<script>
    import { Link } from "svelte-routing";
    import bg from "../../assets/images/hero/pages.jpg";
    import Navlight from "../../components/navbar/navlight.svelte";
    import { clientData } from "../../data/data";
    import Footer from "../../components/footer.svelte";

</script>

<Navlight/>

<section class="bg-half-170 d-table w-100" style="background: url({bg}) center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Testimonial</h5>
                </div>
            </div>
        </div>

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><Link to="/">Coral</Link></li>
                    <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
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
        <div class="column-3 gap-4">
            {#each clientData as item}
                <div class="mb-4">
                    <div class="position-relative overflow-hidden z-1 bg-white rounded shadow p-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="mb-0">{item.tag}</h6>

                            <ul class="list-unstyled mb-0 text-warning">
                                {#each item.rate as el}
                                    <li class="list-inline-item"><i class={el}></i></li>
                                {/each}
                            </ul>
                        </div>

                        <p class="text-muted fst-italic mt-2">{item.desc}</p>

                        <div class="d-flex align-items-center">
                            <img src={item.image} class="avatar avatar-small rounded-pill shadow" alt="">
                            <div class="ms-2">
                                <h6 class="text-dark small mb-0">{item.name}</h6>
                                <small class="text-muted d-block">{item.position}</small>
                            </div>
                        </div>

                        <i class="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
                    </div>
                </div>
            {/each}
        </div>

        <div class="row justify-content-center">
            <div class="col mt-4">
                <div class="text-center">
                    <a href="#!" class="text-primary">See More <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<Footer/>