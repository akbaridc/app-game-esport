<section>
    <div class="container" data-aos="fade-up">
        <h4 class="title-profile">History</h4>
        <div class="card bg-transparent border-0 mt-4 w-75">
            <div class="card-body">
                <div class="d-flex text-center">
                    <div style="width: 15%;font-weight:600;font-size:17px;color:var(--color-secondary-light)" class="p-2">Date</div>
                    <div style="width: 25%;font-weight:600;font-size:17px;color:var(--color-secondary-light)" class="p-2">Transaction</div>
                    <div style="width: 30%;font-weight:600;font-size:17px;color:var(--color-secondary-light)" class="p-2">Platform Currency</div>
                    <div style="width: 30%;font-weight:600;font-size:17px;color:var(--color-secondary-light)" class="p-2">Total</div>
                </div>
            </div>
        </div>

        <div id="dataOrders">
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <div class="card mb-3 w-75" style="background: var(--color-secondary); color: var(--color-white)">
                    <div class="card-body">
                        <div class="d-flex text-center">
                            <div style="width: 15%;" class="p-2">02/12/2022</div>
                            <div style="width: 25%;" class="p-2">Topup</div>
                            <div style="width: 30%;" class="p-2">+150</div>
                            <div style="width: 30%;" class="p-2">+Rp. 4.000.000</div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>