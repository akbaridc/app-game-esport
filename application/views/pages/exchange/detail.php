<section>
    <div class="banner-exchange" style="background: url('<?= base_url('assets/img/cod.png') ?>');" data-aos="fade-up" data-aos-delay="100"></div>
    <div class="container" data-aos="fade-up" data-aos-delay="200">
        <div class="d-flex justify-content-between align-items-center mt-5">
            <div>
                <h4 class="title-profile">Call of Duty Point</h4>
                <div class="d-flex">
                    <i class="bi bi-controller fs-6 me-3"></i>
                    <p style="font-size: 13px; color:var(--color-secondary-light)" class="my-auto">Call of Duty mobile</p>
                </div>
            </div>

            <div class="my-auto">
                <div class="d-flex justify-content-between align-items-center">
                    <img src="<?= base_url('assets/img/logo.png') ?>" width="60" class="img-fluid rounded-circle me-4">
                    <div>
                        <span style="font-size: 13px; color:var(--color-secondary-light)" class="d-block">Organized by</span>
                        <span style="font-size: 17px; color:var(--color-secondary); font-weight: 600">E-Sport Fight Arena</span>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-4">

        <h4 class="title-profile my-4" style="font-size: 24px;">Voucher Game</h4>

        <div class="row mt-4">
            <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="<?= ($i + 1) * 100 ?>">
                    <div class="coins">
                        <input type="radio" name="tabs" id="tab<?= $i ?>" value="">
                        <label for="tab<?= $i ?>">
                            <span class="title-coins d-block mt-2">COD Point</span>
                            <span class="coins-exchange">80</span>
                            <div class="text-center mt-2">
                                <img src="<?= base_url('assets/img/coin.png') ?>" alt="" width="100">
                            </div>
                            <div class="price-coins"><span>5</span></div>
                        </label>
                    </div>
                </div>
            <?php } ?>
        </div>

        <h4 class="title-profile mt-4" style="font-size: 20px;line-height: 30px">Confirm your account</h4>
        <p style="font-size: 13px; color:var(--color-secondary-light)" class="my-auto">Please check your order before process to payment</p>

        <div style="width: 30%;" class="mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname">
            </div>

            <div class="mb-3">
                <label for="account_id" class="form-label">Player / User ID</label>
                <input type="text" class="form-control" name="account_id" id="account_id" placeholder="ID account">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>

            <button type="button" class="btn-authentication mt-4">Exchange</button>
        </div>
    </div>
</section>