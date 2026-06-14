<script>
	import ExploreProduct from './../../components/explore-product.svelte';
    import NftNavdark from "../../components/navbar/nft-navdark.svelte";
    import image1 from '../../assets/images/blog/1.jpg'
    import team from '../../assets/images/team/1.jpg'
    import { Link } from "svelte-routing";
    import Footer from '../../components/footer.svelte';

</script>

<NftNavdark/>

<section class="section pb-0 position-relative mt-4 mt-lg-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <img src={image1} class="rounded shadow-sm img-fluid avatar avatar-ex-large w-100 object-fit-cover" alt="">
                <div class="position-relative text-center">
                    <div class="position-absolute top-0 start-50 translate-middle">
                        <img src={team} class="avatar avatar-small img-thumbnail rounded-pill shadow" alt="">
                    </div>
                </div>

                <div class="content text-center">
                    <h5 class="mb-3 mt-5">streetboyyy</h5>
                    <small class="text-muted px-2 py-1 rounded shadow">bhcedeh5sdijuj-husac4saiu <a href="#!" class="text-primary h5 ms-1" aria-label="link"><i data-feather="copy" class="fea icon-sm"></i></a></small>

                    <h6 class="mt-3 mb-0">Artist, UX / UI designer, and Entrepreneur</h6>

                    <div class="mt-4">
                        <Link to="/profile-setting" class="btn btn-sm btn-outline-primary mx-1">Edit Profile</Link>
                        <Link to="/upload-item" class="btn btn-sm btn-icon btn-outline-primary mx-1" aria-label="link"><i data-feather="upload" class="fea icon-sm"></i></Link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section pt-5">
    <div class="container">
        <ExploreProduct/>
    </div>
</section>

<Footer/>