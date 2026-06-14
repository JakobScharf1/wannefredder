<script>
    import { teamData } from "../../data/data";
</script>

<div class="row align-items-center g-4">
    {#each teamData.slice(0,4) as item}
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card team team-primary bg-transparent text-center mb-5">
                <div class="card-img team-image d-inline-block mx-auto rounded overflow-hidden">
                    <img src={item.image} class="img-fluid" alt="">
    
                    <ul class="list-unstyled team-social mb-0">
                        {#each item.social as el}
                            <li class="mt-1"><a href="#!" class="btn btn-sm btn-pills btn-icon" aria-label="link"><i data-feather={el} class="icons fea-social"></i></a></li>
                        {/each}
                    </ul>
                </div>
    
                <div class="content bg-white mx-4 p-4 z-1 rounded shadow">
                    <a href="#!" class="text-dark h5 mb-0 title">{item.name}</a>
                    <h6 class="text-muted mb-0 mt-1 fw-normal">{item.position}</h6>
                </div>
            </div>
        </div>
    {/each}
</div>