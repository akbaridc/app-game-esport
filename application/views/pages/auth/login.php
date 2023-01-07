<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 authentication">
                <h3>Log In E-Sport Fight Arena</h3>
                <div style="width: 70%;">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" id="password" placeholder="Enter your password">
                    </div>

                    <div class="mb-3 float-end">
                        <a href="<?= base_url('forgot-password') ?>">Forgot Password ?</a>
                    </div>

                    <button type="button" class="btn-authentication">Login</button>
                </div>

            </div>
            <div class="col-md-6">
                <img src="<?= base_url('assets/img/login.png') ?>" width="500" height="500">
            </div>
        </div>
    </div>
</section>