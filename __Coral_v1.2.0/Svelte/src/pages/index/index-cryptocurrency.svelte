<script>
// @ts-nocheck

    import { onMount } from "svelte";
    import { Link } from "svelte-routing";

    import { cryptoData, traderData } from "../../data/data";

    import bg from '../../assets/images/hero/bg-crypto.jpg'
    import coin1 from '../../assets/images/bitcoin.png'
    import coin2 from '../../assets/images/ethereum.png'
    import about from '../../assets/images/bitcoin.svg'
    import image1 from '../../assets/images/01.png'
    import app from '../../assets/images/app.png'
    import playstore from '../../assets/images/playstore.png'

    import { tns } from 'tiny-slider/src/tiny-slider';
    
    import Navlight from "../../components/navbar/navlight.svelte";
    import ClientOne from "../../components/client/client-one.svelte";
    import Footer from "../../components/footer.svelte";

     import Tobii from 'tobii';

    let tobii;

    onMount(()=>{
        tobii = new Tobii();
        tns({
            container: '.tiny-three-item-icon',
            controls: true,
            mouseDrag: true,
            loop: true,
            rewind: true,
            autoplay: true,
            autoplayButtonOutput: false,
            autoplayTimeout: 3000,
            navPosition: "bottom",
            controlsText: ['<i class="mdi mdi-chevron-left "></i>', '<i class="mdi mdi-chevron-right"></i>'],
            nav: false,
            speed: 400,
            gutter: 0,
            responsive: {
                992: {
                    items: 3
                },

                767: {
                    items: 2
                },

                320: {
                    items: 1
                },
            },
        });
    })
</script>

<Navlight/>

<section class="bg-half-260 position-relative overflow-hidden pb-5" style="background: url({bg}) top no-repeat;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="title-heading position-relative z-1 margin-top-100">
                    <h1 class="display-4 text-white title-dark lh-base mb-4">New Digital App for <br> Cryptocurrency</h1>
                    <p class="para-desc mx-auto text-white-50">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                    <div class="mt-4 pt-2">
                        <Link to="/services" class="btn btn-lg btn-pills btn-primary m-1">Join Now</Link>
                        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" aria-label="link" class="btn btn-lg btn-icon btn-pills btn-soft-primary m-1 lightbox"><i data-feather="video" class="icons"></i></a><span class="fw-bold small text-uppercase text-white title-dark align-middle ms-2">Watch Now</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="position-absolute top-0 end-0 translate-middle-y">
            <img src={coin1} class="avatar avatar-large mover" alt="">
        </div>

        <div class="position-absolute bottom-0 start-0">
            <img src={coin2} class="avatar avatar-large mover" alt="">
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row">
            <div class="col-12">
                <div class="tiny-three-item-icon">
                    {#each cryptoData as item}
                        <div class="tiny-slide">
                            <div class="position-relative overflow-hidden rounded shadow bg-white p-4 m-2">
                                <div class="position-relative d-flex align-items-center justify-content-between z-1">
                                    <div class="d-flex align-items-center">
                                        <img src={item.image} class="rounded-pill shadow bg-white avatar avatar-md-sm" alt="">
                                        
                                        <div class="ms-3">
                                            <h6 class="mb-1"><a href="#!" class="text-dark link-title">{item.name1} ({item.name2})</a></h6>
                                            <h6 class={`small mb-0 ${item.text}`}>{item.price}</h6>
                                        </div>
                                    </div>
                                    
                                    <div class="ms-2">
                                        <span class={`badge rounded-pill ${item.bg}`}>{item.change1}</span>
                                    </div>
                                </div>
                                
                                <div class="position-absolute top-50 start-100 translate-middle">
                                    <img src={item.image} class="avatar avatar-md-md opacity-10 me-5" alt="">
                                </div>
                            </div>
                        </div>
                    {/each}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <img src={about} class="img-fluid" alt="">
            </div>

            <div class="col-lg-7 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-3">Moving your Existing Solution <br> for Cryptocurrency</h4>
                    <p class="text-muted para-desc mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>

                    <ul class="list-unstyled text-muted mb-0 mt-3">
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#!" class="btn btn-link primary fs-6">Read More <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Cryptocurrency Market</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 mt-4">
                <div class="table-responsive shadow rounded">
                    <table class="table mb-0 table-center bg-white">
                        <thead>
                            <tr>
                                <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="min-width: 180px;">Name</th>
                                <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="min-width: 100px;">Symbol</th>
                                <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="width: 150px;">Price</th>
                                <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="width: 150px;">Change(%)</th>
                                <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="width: 150px;">Change($)</th>
                                <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3" style="width: 150px;">Marketcap</th>
                                <th scope="col" class="fw-normal border-bottom text-muted py-4 px-3 text-end" style="width: 100px;">Trade</th>
                            </tr>
                        </thead>

                        <tbody>
                            {#each cryptoData as item}
                                <tr>
                                    <th class="p-3">
                                        <div class="align-items-center">
                                            <img src={item.image} class="me-2 avatar avatar-ex-small" alt="">
                                            <p class="mb-0 d-inline text-dark fw-normal h6">{item.name1}</p>
                                        </div>
                                    </th>
                                    <td class="p-3 text-muted fw-medium">{item.name2}</td>
                                    <td class="p-3 text-dark">{item.price}</td>
                                    <td class={`p-3 ${item.text}`}>{item.change1}</td>
                                    <td class={`p-3 ${item.text}`}>{item.change2}</td>
                                    <td class="text-muted p-3">{item.marketCap}</td>
                                    <td class="p-3 text-end"><a href="#!" class="btn btn-sm btn-primary">Trade</a></td>
                                </tr>
                            {/each}
                        </tbody>
                    </table>
                </div>

                <div class="mt-4 text-center">
                    <a href="#!" class="btn btn-link primary fs-6">See More <i class="mdi mdi-arrow-right align-middle"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Become a Crypto Trader</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center g-4">
            {#each traderData as item}
                <div class="col-lg-3 col-md-6">
                    <div class="position-relative p-4 bg-white shadow rounded overflow-hidden">
                        <div class="pe-4">
                            <a href="#!" class="link-title h5 text-dark">{item.title}</a>
                            <p class="text-muted mb-3 mt-4">{item.desc}</p>
                            <a href="#!" class="btn btn-link primary">{item.btn} <i class="mdi mdi-arrow-right align-middle"></i></a>
                        </div>
                        <div class="position-absolute top-50 start-100 translate-middle z-0">
                            <img src={item.image} class="avatar avatar-large opacity-25" alt="">
                        </div>
                    </div>
                </div>
            {/each}
        </div>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Customer's Review</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                </div>
            </div>
        </div>

        <ClientOne/>
    </div>

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5 col-12">
                <img src={image1} class="img-fluid mx-auto d-block" alt="">
            </div>

            <div class="col-lg-7 col-md-7 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title">
                    <div class="alert alert-light alert-pills text-dark" role="alert">
                        <span class="badge bg-primary rounded-pill me-1">Apps</span>
                        <span class="content">Download now <i class="mdi mdi-arrow-right align-middle"></i></span>
                    </div>
                    <h4 class="title mb-3">Available for your <br> Smartphones</h4>
                    <p class="text-muted para-desc mb-0">Our platform reaches people all over the world, hereby we are trusted as the best platform for crypto trading.</p>
                    <div class="my-4">
                        <a href="#!">
                            <img src={app} class="me-2" height="50" alt="">
                        </a>

                        <a href="#!">
                            <img src={playstore} height="50" alt="">
                        </a>
                    </div>

                    <div class="d-inline-block">
                        <div class="pt-4 d-flex align-items-center border-top">
                            <i data-feather="smartphone" class="fea icon-md me-2 text-primary"></i>
                            <div class="content">
                                <h6 class="mb-0">Install app now on your cellphones</h6>
                                <a href="#!" class="text-primary h6">Learn More <i class="mdi mdi-arrow-right"></i></a>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<Footer/>