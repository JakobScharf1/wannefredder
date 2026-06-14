<script>
    import { Link } from "svelte-routing";
    import { nftData } from "../data/data";
</script>

<div class="row g-4">
    {#each nftData.slice(0,8) as item}
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="nft-item p-4 rounded shadow bg-white">
                <div class="position-relative">
                    <div class="nft-image position-relative overflow-hidden rounded shadow">
                        <img src={item.image} class="img-fluid" alt="">
                        <div class="bg-overlay bg-black"></div>
                        <div class="bid-button position-absolute top-50 translate-y-middle start-0 end-0 text-center">
                            <Link to="{`/nft-detail/${item.id}`}" class="btn btn-sm btn-icon btn-pills btn-primary me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Buy Now"><i data-feather="shopping-cart" class="fea icon-sm align-middle"></i></Link>
                            <Link to="{`/nft-detail/${item.id}`}" class="btn btn-sm btn-icon btn-pills btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Bid Now"><i data-feather="zap" class="fea icon-sm align-middle"></i></Link>>
                        </div>
                    </div>

                    <div class="position-absolute top-0 start-0 m-3">
                        <Link to="/creator-profile"><img src={item.client} class="avatar avatar-md-sm rounded-pill shadow img-thumbnail" alt=""></Link>
                    </div>
                </div>

                <div class="content pt-4 position-relative">
                    <Link to="/nft-detail" class="text-dark link-title h6">{item.name}</Link>

                    <div class="d-flex justify-content-between mt-2">
                        <span class="rate text-primary">{item.value}</span>
                        <span class="text-dark">{item.item}</span>
                    </div>
                </div>
            </div>
        </div>
    {/each}
</div>