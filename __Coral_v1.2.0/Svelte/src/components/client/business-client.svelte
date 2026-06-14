<script>
    import { onMount } from "svelte";
    import { clientData } from "../../data/data";
    import image from '../../assets/images/report-analysis-5-18.svg'

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
<div class="row align-items-center">
    <div class="col-lg-6 col-md-6">
        <div class="position-relative">
            <img src={image} class="img-fluid" alt="">

            <div class="modern-app-round round-small"></div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 mt-4 mt-md-0 pt-2 pt-md-0">
        <div class="section-title ms-lg-3">
            <h4 class="title mb-3">Customer's Review</h4>
            <p class="text-muted para-desc mb-0">Design better and spend less time without restricting creative freedom. Combine layouts, customize everything.</p>
        
            <div class="row">
                <div class="col-12 mt-4">
                    <div class="tiny-single-item">
                        {#each clientData as item}
                            <div class="tiny-slide">
                                <div class="position-relative overflow-hidden z-1 bg-white rounded shadow p-4 m-2">
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
                </div>
            </div>
        </div>
    </div>
</div>