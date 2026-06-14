<script>
    import about1 from '../assets/images/about/1.jpg'
    import about2 from '../assets/images/about/2.jpg'
    import about3 from '../assets/images/about/3.jpg'
    import about4 from '../assets/images/about/4.jpg'
</script>

<div class="position-relative">
    <div class="row align-items-end">
        <div class="col-7">
            <img src={about1} class="img-fluid rounded" alt="">
        </div>

        <div class="col-5">
            <img src={about3} class="img-fluid rounded" alt="">
        </div>
    </div>

    <div class="row align-items-start mt-4">
        <div class="col-5">
            <img src={about4} class="img-fluid rounded" alt="">
        </div>

        <div class="col-7">
            <img src={about2} class="img-fluid rounded" alt="">
        </div>
    </div>

    <div class="position-absolute top-50 start-50 translate-middle">
        <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" data-tobii class="avatar avatar-md-md rounded-pill shadow card d-flex justify-content-center align-items-center lightbox" aria-label="link">
            <i class="mdi mdi-play mdi-24px text-primary"></i>
        </a>
    </div>

    <div class="position-absolute top-50 start-50 translate-middle z-n1">
        <div class="bg-primary rounded opacity-75 p-5"><div class="p-5 m-5"></div></div>
    </div>
</div>