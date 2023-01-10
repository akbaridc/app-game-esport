<section>
    <div class="container">
        <div class="card mx-auto transcation-card" data-aos="fade-up">
            <div class="card-body">
                <div class="container">
                    <h4 style="font-size: 20px;line-height: 30px;font-weight: 600;color:var(--color-white)" class="text-center">Saldo</h4>
                    <div class="d-flex justify-content-center align-items-center w-50 mx-auto">
                        <img src="<?= base_url('assets/img/dompet.png') ?>" alt="" width="100" class="me-5">
                        <div>
                            <h4 style="font-size: 20px;line-height: 30px;font-weight: 600;color:var(--color-white)" class="mt-3">100</h4>
                            <h5 style="font-size: 14px;line-height: 25px;font-weight: 500;color:var(--color-white)" class="mt-3">ID 12345678</h5>
                        </div>
                    </div>

                    <div class="container">
                        <div class="d-flex align-items-center justify-content-between mt-5">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="<?= base_url('topup') ?>" class="btn-wallet me-5">Top Up > </a>
                                <a href="<?= base_url('withdraw') ?>" class="btn-wallet">Withdraw > </a>
                            </div>
                            <div>
                                <a href="<?= base_url('history') ?>" class="btn-wallet">History > </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>