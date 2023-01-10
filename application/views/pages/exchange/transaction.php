<section>
    <div class="container">
        <div class="text-center">
            <h4 class="title-profile">Check Out Order</h4>

            <?php

            $data = (object)[
                'codPoint' => 80,
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

            <button type="button" class="btn-authentication mt-4 w-25">Paid</button>
        </div>
    </div>
</section>