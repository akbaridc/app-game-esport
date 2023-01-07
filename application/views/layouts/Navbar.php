<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container d-flex justify-content-between">
        <nav id="navbar" class="navbar">
            <a href="<?= base_url() ?>" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="<?= base_url('assets/img/logo.png') ?>" alt="">
                <!-- <h1>HeroBiz<span>.</span></h1> -->
            </a>
            <ul>

                <li><a class="nav-link scrollto" href="#">Blog</a></li>
                <li><a class="nav-link scrollto" href="#">Tournament</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->

        <div class="group-btn d-flex align-items-center">
            <?php if ($this->uri->segment(1) == null || $this->uri->segment(1) == 'forgot-password' || $this->uri->segment(1) == 'reset-password') { ?>
                <a class="btn-login" href="<?= base_url('login') ?>">Login</a>
                <a class="btn-sign-up" href="<?= base_url('sign-up') ?>">Sign Up</a>
            <?php } ?>

            <?php if ($this->uri->segment(1) == 'login') { ?>
                <p>Don't have account yet?</p>
                <a class="btn-sign-up" href="<?= base_url('sign-up') ?>">Sign Up</a>
            <?php } ?>

            <?php if ($this->uri->segment(1) == 'sign-up') { ?>
                <p>Allready have an account?</p>
                <a class="btn-sign-up" href="<?= base_url('login') ?>">Login</a>
            <?php } ?>

        </div>

    </div>
</header><!-- End Header -->