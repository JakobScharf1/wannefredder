<script>
    import { onMount } from "svelte";
    import { clientData } from "../../data/data";
    import { tns } from 'tiny-slider/src/tiny-slider';

    onMount(()=>{
        tns({
             container: '.tiny-three-item',
            controls: false,
            mouseDrag: true,
            loop: true,
            rewind: true,
            autoplay: true,
            autoplayButtonOutput: false,
            autoplayTimeout: 3000,
            navPosition: "bottom",
            nav:false,
            speed: 400,
            gutter: 12,
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

<div class="row">
    <div class="col-12 mt-4">
        <div class="tiny-three-item">
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