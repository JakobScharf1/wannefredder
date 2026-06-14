<script>
    import { Link } from "svelte-routing";

    import bg from "../../assets/images/hero/pages.jpg";
    import Navlight from "../../components/navbar/navlight.svelte";
    import { teamData } from "../../data/data";
    import Footer from "../../components/footer.svelte";

</script>
<Navlight/>

<section class="bg-half-170 d-table w-100" style="background: url({bg}) center;">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Our Team Members</h5>
                </div>
            </div>
        </div>

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><Link to="/">Coral</Link></li>
                    <li class="breadcrumb-item active" aria-current="page">Team</li>
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
            {#each teamData as item}
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
    </div>
</section>

<Footer/>