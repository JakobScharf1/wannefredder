<script>
    import { onMount } from "svelte";
    import { clientData } from "../../data/data";
    import bg from '../../assets/images/hero/pages.jpg'

    import { tns } from 'tiny-slider/src/tiny-slider';

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

<section class="cta-video-section position-relative" style="background: url({bg}) center fixed;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-10">
                <div class="position-relative z-1 p-4 rounded shadow bg-white">
                    <div class="tiny-single-item">
                        {#each clientData as item}
                            <div class="tiny-slide">
                                <div class="position-relative overflow-hidden">
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
                                </div>
                            </div>
                        {/each}
                    </div>

                    <i class="mdi mdi-format-quote-open text-primary position-absolute top-50 start-50 translate-middle z-n1 testi-icon"></i>
                </div>
            </div>
        </div>
    </div>
</section>