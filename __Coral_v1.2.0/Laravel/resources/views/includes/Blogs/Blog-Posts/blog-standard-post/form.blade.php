<form class="mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Your Comment</label>
                <textarea id="message" placeholder="Your Comment" rows="5" name="message" class="form-control" required=""></textarea>
            </div>
        </div><!--end col-->

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Name <span class="text-danger">*</span></label>
                <input id="name" name="name" type="text" placeholder="Name" class="form-control" required="">
            </div>
        </div><!--end col-->

        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                <input id="email" type="email" placeholder="Email" name="email" class="form-control" required="">
            </div>
        </div><!--end col-->

        <div class="col-md-12">
            <div class="send d-grid">
                <button type="submit" class="btn btn-pills btn-primary">Send Message</button>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</form><!--end form-->