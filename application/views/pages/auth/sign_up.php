<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 authentication">
                <h3>Sign Up</h3>
                <div style="width: 70%;">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Fullname</label>
                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter your fullname">
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username">
                    </div>

                    <div class="mb-3">
                        <label for="squad_name" class="form-label">Squad Name</label>
                        <input type="text" class="form-control" name="squad_name" id="squad_name" placeholder="Enter your Squad name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" id="password" placeholder="Enter your Password">
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password Confirmation</label>
                        <input type="text" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Enter your Password Confirmation">
                    </div>


                    <button type="button" class="btn-authentication">Create an account</button>
                </div>

            </div>
            <div class="col-md-6">
                <img src="<?= base_url('assets/img/sign_up.png') ?>" width="500" height="500">
            </div>
        </div>
    </div>
</section>