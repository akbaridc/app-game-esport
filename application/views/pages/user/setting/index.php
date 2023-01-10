<section>
    <div class="container" data-aos="fade-up">
        <h4 class="title-profile">Your Account</h4>

        <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link bg-transparent active" id="pills-password-tab" data-bs-toggle="pill" data-bs-target="#pills-password" type="button" role="tab" aria-controls="pills-password" aria-selected="true">Password</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link bg-transparent" id="pills-orders-tab" data-bs-toggle="pill" data-bs-target="#pills-orders" type="button" role="tab" aria-controls="pills-orders" aria-selected="false">Orders</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link bg-transparent" id="pills-deactive-account-tab" data-bs-toggle="pill" data-bs-target="#pills-deactive-account" type="button" role="tab" aria-controls="pills-deactive-account" aria-selected="false">Deactive Account</button>
            </li>
        </ul>
        <hr style="width: 32%;">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab">
                <?php $this->load->view('pages/user/setting/section/password') ?>
            </div>
            <div class="tab-pane fade" id="pills-orders" role="tabpanel" aria-labelledby="pills-orders-tab">
                <?php $this->load->view('pages/user/setting/section/orders') ?>
            </div>
            <div class="tab-pane fade" id="pills-deactive-account" role="tabpanel" aria-labelledby="pills-deactive-account-tab">
                <?php $this->load->view('pages/user/setting/section/deactive_account') ?>
            </div>
        </div>
    </div>
</section>