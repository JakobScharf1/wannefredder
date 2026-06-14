<script>
    import { Link } from "svelte-routing";
    import { servicesData } from "../../data/data";

</script>

<div class="row align-items-center g-4">
    {#each servicesData.slice(0,3) as item}
        <div class="col-lg-4 col-md-6 col-12">
            <div class="position-relative features text-center rounded shadow p-4 pt-5">
                <div class="position-relative d-flex justify-content-center">
                    <i data-feather={item.icon} class="fea icon-md text-primary z-1"></i>
                    <div class="feature-icon bg-soft-primary position-absolute top-0 translate-middle"></div>
                </div>

                <div class="mt-4">
                    <Link to="/service-detail" class="h5 text-dark link-title">{item.title}</Link>
                    <p class="text-muted mt-3">{item.desc}</p>
                    <Link to="/service-detail" class="text-primary">Learn More <i class="mdi mdi-arrow-right align-middle"></i></Link>
                </div>
            </div>
        </div>
    {/each}
</div>