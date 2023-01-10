<div class="row mt-4">
    <div class="col-md-2">
        <div class="d-flex flex-column border p-4 orders-sidebar">
            <h5>Status</h5>
            <div class="px-3 border mb-3"></div>
            <h6 class="active">All</h6>
            <h6>Paid</h6>
            <h6>Pending</h6>
            <h6>Cancel</h6>
        </div>
    </div>

    <div class="col-md-10">
        <div class="card bg-transparent border-0">
            <div class="card-body">
                <div class="d-flex text-center">
                    <div style="width: 10%;font-weight:600;font-size:17px;color:var(--color-secondary-light)" class="p-2">Order Number</div>
                    <div style="width: 15%;font-weight:600;font-size:17px;color:var(--color-secondary-light)" class="p-2">Date</div>
                    <div style="width: 20%;font-weight:600;font-size:17px;color:var(--color-secondary-light)" class="p-2">Customer Email</div>
                    <div style="width: 20%;font-weight:600;font-size:17px;color:var(--color-secondary-light)" class="p-2">Customer Name</div>
                    <div style="width: 15%;font-weight:600;font-size:17px;color:var(--color-secondary-light)" class="p-2">Orders</div>
                    <div style="width: 10%;font-weight:600;font-size:17px;color:var(--color-secondary-light)" class="p-2">Status</div>
                    <div style="width: 10%;font-weight:600;font-size:17px;color:var(--color-secondary-light)" class="p-2">Total</div>
                </div>
            </div>
        </div>

        <div id="dataOrders">
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <div class="card mb-3" style="background: var(--color-secondary); color: var(--color-white)">
                    <div class="card-body">
                        <div class="d-flex text-center">
                            <div style="width: 10%;" class="p-2">001</div>
                            <div style="width: 15%;" class="p-2">02/12/2022</div>
                            <div style="width: 20%;" class="p-2">akbarimawan18@gmail.com</div>
                            <div style="width: 20%;" class="p-2">Akbar Imawan Dwi Cahya</div>
                            <div style="width: 15%;" class="p-2">Diamond mobile legend</div>
                            <div style="width: 10%;" class="p-2">Pending</div>
                            <div style="width: 10%;" class="p-2">2</div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>
</div>