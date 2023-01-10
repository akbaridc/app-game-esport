<?php
$showAunthentication = [null, 'forgot-password', 'reset-password'];
$showProfile = [null, 'forgot-password', 'reset-password', 'login', 'sign-up'];
?>

<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container d-flex justify-content-between">
        <nav id="navbar" class="navbar">
            <a href="<?= base_url() ?>" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="<?= base_url('assets/img/logo.png') ?>" alt="">
            </a>
            <ul>
                <li><a class="nav-link scrollto <?= $this->uri->segment(1) == 'blog' ? 'active' : '' ?>" href="#">Blog</a></li>
                <li><a class="nav-link scrollto <?= $this->uri->segment(1) == 'tournament' ? 'active' : '' ?>" href="<?= base_url('tournament') ?>">Tournament</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->

        <?php if (!in_array($this->uri->segment(1), $showProfile)) { ?>
            <div class="group-btn d-flex align-items-center">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping" style="background-color: transparent !important;border-right:none"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control shadow-none" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping" style="border-left:none">
                </div>

                <a class="btn-second" <?= $this->uri->segment(1) == 'exchange' ? 'active' : '' ?> href="<?= base_url('exchange') ?>">Exchange</a>
                <a class="btn-second" <?= $this->uri->segment(1) == 'wallet' ? 'active' : '' ?> href="<?= base_url('wallet') ?>">Wallet</a>
            </div>
        <?php } ?>

        <div class="group-btn d-flex align-items-center">
            <?php if (in_array($this->uri->segment(1), $showAunthentication)) { ?>
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

            <?php if (!in_array($this->uri->segment(1), $showProfile)) { ?>
                <i class="bi bi-bell notification"></i>

                <div class="dropdown">
                    <div class="dropdown-toggle d-flex justify-content-between align-items-center" style="cursor:pointer" data-bs-toggle="dropdown">
                        <img src="<?= base_url('assets/img/team/team-1.jpg') ?>" alt="" class="img-fluid rounded-circle me-2" width="40">
                        <span>Admin</span>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Reports</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</header><!-- End Header -->