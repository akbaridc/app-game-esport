<!DOCTYPE html>
<html lang="en">

<?= $header ?>

<body>

    <!-- ======= Navbar ======= -->
    <?= $navbar ?>

    <!-- ======= Jumbotron ======= -->

    <?php
    $showJumbotron = [null, 'home'];
    ?>

    <?php if (in_array($this->uri->segment(1), $showJumbotron)) {
        echo $jumbotron;
    } else {
        $stylePadding = 'margin-top: 50px';
    } ?>

    <main id="main" style="<?= isset($stylePadding) ? $stylePadding : '' ?>">

        <?= $content ?>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?= $footer ?>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
    <!-- <div class="loader" id="loader">Loading...</div> -->

    <!-- Vendor JS Files -->
    <?= $js ?>

</body>

</html>