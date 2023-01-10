<section>
    <div class="container" data-aos="fade-up">
        <div class="text-center">
            <h4 class="title-profile">Summary Topup</h4>

            <?php

            $data = (object)[
                'nominal' => 500000,
                'totCurrency' => 5,
                'name' => 'Akbar Imawan Dwi Cahya',
                'userId' => 12345678,
                'email' => 'akbar@gmail.com',
                'bank' => 'BCA',
                'noAccount' => 12345678,
                'fullname' => 'Rido roma'
            ];

            echo generateTransaction($data, $this->uri->segment(1));

            ?>

            <button type="button" class="btn-authentication mt-4 w-25">Next</button>
        </div>
    </div>
</section>