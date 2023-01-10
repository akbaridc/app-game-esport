<section>
    <div class="container" data-aos="fade-up">
        <h4 class="title-profile">Tournament</h4>

        <div class="row mt-3">
            <div class="col-md-4 ">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping" style="background-color: transparent !important;border-right:none"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control shadow-none" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping" style="border-left:none">
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <?php

            $data = [
                [
                    'id' => 1,
                    'imgUrl' => 'img-ml.png',
                    'title' => 'E-sport Fight Arena',
                    'game' => 'Mobile legend : Bang - bang',
                    'create' => '12 December 2022'
                ],
                [
                    'id' => 2,
                    'imgUrl' => 'img-ml.png',
                    'title' => 'E-sport Fight Arena',
                    'game' => 'Mobile legend : Bang - bang',
                    'create' => '12 December 2022'
                ],
                [
                    'id' => 3,
                    'imgUrl' => 'img-ml.png',
                    'title' => 'E-sport Fight Arena',
                    'game' => 'Mobile legend : Bang - bang',
                    'create' => '12 December 2022'
                ],
                [
                    'id' => 4,
                    'imgUrl' => 'img-ml.png',
                    'title' => 'E-sport Fight Arena',
                    'game' => 'Mobile legend : Bang - bang',
                    'create' => '12 December 2022'
                ],
                [
                    'id' => 5,
                    'imgUrl' => 'img-ml.png',
                    'title' => 'E-sport Fight Arena',
                    'game' => 'Mobile legend : Bang - bang',
                    'create' => '12 December 2022'
                ],
                [
                    'id' => 6,
                    'imgUrl' => 'img-ml.png',
                    'title' => 'E-sport Fight Arena',
                    'game' => 'Mobile legend : Bang - bang',
                    'create' => '12 December 2022'
                ],
                [
                    'id' => 7,
                    'imgUrl' => 'img-ml.png',
                    'title' => 'E-sport Fight Arena',
                    'game' => 'Mobile legend : Bang - bang',
                    'create' => '12 December 2022'
                ], [
                    'id' => 8,
                    'imgUrl' => 'img-ml.png',
                    'title' => 'E-sport Fight Arena',
                    'game' => 'Mobile legend : Bang - bang',
                    'create' => '12 December 2022'
                ],
            ];

            foreach ($data as $key => $value) {
                $generateNumberRand = ($key + 1) * 100;
                echo generateCard($value['id'], $value['imgUrl'], $value['title'], $value['game'], $value['create'], $generateNumberRand, $this->uri->segment(1));
            }

            ?>

        </div>
</section>