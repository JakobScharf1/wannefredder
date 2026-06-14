<script>
    import { Link } from "svelte-routing";
    import { blogData } from "../data/data";
</script>

<div class="row g-4">
    {#each blogData.slice(0,3) as item}
        <div class="col-lg-4 col-md-6 col-12">
            <div class="blog position-relative overflow-hidden shadow rounded p-4">
                <div class="position-relative">
                    <div class="blog-image position-relative overflow-hidden rounded shadow">
                        <img src={item.image} class="img-fluid" alt="">
                    </div>
    
                    <div class="position-absolute top-100 start-0 translate-middle-y ms-2">
                        <a href="#!" class="badge bg-primary">{item.tag}</a>
                    </div>
                </div>
    
                <div class="pt-4">
                    <Link to="/blog-standard-post" class="text-dark title h5">{item.title}</Link>
    
                    <p class="text-muted my-2">{item.desc}</p>
    
                    <Link to="/blog-standard-post" class="text-dark read-more">Read More <i class="mdi mdi-chevron-right align-middle"></i></Link>
                </div>
            </div>
        </div>
    {/each}
</div>