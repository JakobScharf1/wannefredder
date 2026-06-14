<script>
    import team1 from '../../assets/images/team/1.jpg'
    import team2 from '../../assets/images/team/2.jpg'
    import team3 from '../../assets/images/team/3.jpg'
</script>

<div class="card shadow rounded border-0 mt-4">
    <div class="card-body">
        <h5 class="card-title mb-0">Comments :</h5>

        <ul class="media-list list-unstyled mb-0">
            <li class="mt-4">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <a class="pe-3" href="#!">
                            <img src={team1} class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                        </a>
                        <div class="commentor-detail">
                            <h6 class="mb-0"><a href="#!" class="text-dark media-heading">Lorenzo Peterson</a></h6>
                            <small class="text-muted">1st June 2024 at 01:25 pm</small>
                        </div>
                    </div>
                    <a href="#!" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                </div>
                <div class="mt-3">
                    <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                </div>
            </li>

            <li class="mt-4">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <a class="pe-3" href="#!">
                            <img src={team2} class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                        </a>
                        <div class="commentor-detail">
                            <h6 class="mb-0"><a href="#!" class="media-heading text-dark">Tammy Camacho</a></h6>
                            <small class="text-muted">1st June 2024 at 05:44 pm</small>
                        </div>
                    </div>
                    <a href="#!" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                </div>
                <div class="mt-3">
                    <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                </div>
            </li>
            
            <li class="mt-4">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <a class="pe-3" href="#!">
                            <img src={team3} class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                        </a>
                        <div class="commentor-detail">
                            <h6 class="mb-0"><a href="#!" class="media-heading text-dark">Tammy Camacho</a></h6>
                            <small class="text-muted">1st June 2024 at 03:44 pm</small>
                        </div>
                    </div>
                    <a href="#!" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                </div>
                <div class="mt-3">
                    <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                </div>

                <ul class="list-unstyled ps-4 ps-md-5 sub-comment">
                    <li class="mt-4">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <a class="pe-3" href="#!">
                                    <img src={team1} class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                </a>
                                <div class="commentor-detail">
                                    <h6 class="mb-0"><a href="#!" class="text-dark media-heading">Lorenzo Peterson</a></h6>
                                    <small class="text-muted">1st June 2024 at 01:25 pm</small>
                                </div>
                            </div>
                            <a href="#!" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<div class="card shadow rounded mt-4">
    <div class="card-body">
        <h5 class="card-title mb-0">Leave A Comment :</h5>

        <form class="mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label" for="message">Your Comment</label>
                        <textarea id="message" placeholder="Your Comment" rows="5" name="message" class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                        <input id="name" name="name" type="text" placeholder="Name" class="form-control">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label" for="mail">Your Email <span class="text-danger">*</span></label>
                        <input id="email" type="email" placeholder="Email" name="email" class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="send d-grid">
                        <button type="submit" class="btn btn-pills btn-primary">Send Message</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>