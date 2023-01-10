<section>
    <div class="container" data-aos="fade-up">
        <h4 class="title-profile">Mobile Legend</h4>

        <div class="row mt-3">
            <div class="col-md-4 ">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping" style="background-color: transparent !important;border-right:none"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control shadow-none" placeholder="Search for game tournament" aria-label="search" aria-describedby="addon-wrapping" style="border-left:none">
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <?php for ($i = 0; $i < 4; $i++) {  ?>
                <div class="col-md-3 col-lg-3 col-xl-3 col-sm-12 col-xs-12 mb-3" data-aos="fade-up" data-aos-delay="<?= ($i + 1) * 100 ?>">
                    <div class="card border-0 text-white" style="background: var(--color-secondary);">
                        <img src="<?= base_url('assets/img/img-ml.png') ?>" class="card-img-top" height="250" style="border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <img src="<?= base_url('assets/img/logo.png') ?>" width="45" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="col-md-9 my-auto">
                                        <span class="fw-semibold" style="font-size: 16px">E-Sport Fight Arena</span>
                                    </div>
                                </div>

                                <h6 class="mt-4 mb-2 title-deskripsi-tournament">Mobile legend Cup 2022</h6>

                                <?php for ($k = 0; $k < 5; $k++) { ?>
                                    <div class="row">
                                        <div class="col-md-2 mt-3 text-start">
                                            <i class="bi bi-controller fs-6 border px-1 rounded-circle"></i>
                                        </div>
                                        <div class="col-md-10 mt-3">
                                            <p style="font-size: 13px; color:var(--color-secondary-light)" class="my-auto text-start">Mobile legend : Bang - bang</p>
                                        </div>
                                    </div>
                                <?php } ?>

                                <h6 class="mt-5 title-deskripsi-tournament">Open Registration</h6>
                                <h6 class="title-deskripsi-tournament-date">02-20 December</h6>

                                <button type="button" class="btn-authentication mt-4">Registration</button>
                                <p style="font-size: 10px; color:var(--color-secondary-light)" class="mt-2 mb-0 text-center">Created at 12 December 2022</p>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
</section>