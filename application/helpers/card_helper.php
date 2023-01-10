<?php

defined('BASEPATH') or exit('No direct script access allowed');



function generateCard($id, $imgUrl, $title, $titleGame, $createdDate, $generateNumberRand, $page)

{

    $type = $page == 'tournament' ? "Tournament('$id')" : ($page == 'exchange' ? "Exhange('$id')" : "");

    $html = '<div class="col-md-3 col-lg-3 col-xl-3 col-sm-12 col-xs-12 mb-3" data-aos="fade-up" data-aos-delay="' . $generateNumberRand . '">
                <div class="card border-0 text-white" style="background: var(--color-secondary);">
                    <img src="' . base_url('assets/img/' . $imgUrl) . '" class="card-img-top" height="250" style="border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <img src="' . base_url('assets/img/logo.png') . '" width="45" class="img-fluid rounded-circle">
                                </div>
                                <div class="col-md-9 my-auto">
                                    <span class="fw-semibold" style="font-size: 16px">' . $title . '</span>
                                </div>

                                <div class="col-md-3 mt-3 text-center">
                                    <i class="bi bi-controller fs-6 border px-1 rounded-circle"></i>
                                </div>
                                <div class="col-md-9 mt-3">
                                    <p style="font-size: 13px; color:var(--color-secondary-light)" class="my-auto">' . $titleGame . '</p>
                                </div>
                            </div>

                            <button type="button" onclick="handlerView' . $type . '" class="btn-authentication mt-4">View</button>
                            <p style="font-size: 10px; color:var(--color-secondary-light)" class="mt-2 mb-0 text-center">Created at ' . $createdDate . '</p>

                        </div>
                    </div>
                </div>
            </div>';

    return $html;
}

function generateTransaction($data, $page)
{

    if ($page == 'exchange') {
        $title1 = "Voucher Game";
        $title2 = "Payout";
        $firstTd = "COD Point";
        $TableSecondFirstTd = "Name";
        $TableSecondTd = "Player / User ID";
    }

    if ($page == 'withdraw') {
        $title1 = "Withdraw";
        $title2 = "Payin";
        $firstTd = "Nominal";
        $TableSecondFirstTd = "Fullname";
        $TableSecondTd = "ID";
    }

    if ($page == 'topup') {
        $title1 = "Top Up Saldo";
        $title2 = "Payout";
        $firstTd = "Nominal";
        $TableSecondFirstTd = "Fullname";
        $TableSecondTd = "ID";
    }

    if (isset($data->codPoint)) {
        $valueFirstTd = $data->codPoint;
    }

    if (isset($data->nominal)) {
        $valueFirstTd = "Rp. " . $data->nominal;
    }

    $html = "";

    $html .= '<div class="card mx-auto transcation-card mb-3 text-start">
                <div class="card-body">
                    <div class="container">
                        <h4 style="font-size: 20px;line-height: 30px;font-weight: 600;color:var(--color-white);opacity:0.8">' . $title1 . '</h4>
                        <hr>';
    if ($page == 'exchange') {
        $html .= '<h4 class="title-profile" style="font-size: 24px;line-height: 30px;color:var(--color-white);opacity:0.8">Call of Duty Points</h4>
                                      <div class="d-flex">
                                          <i class="bi bi-controller fs-6 me-3"></i>
                                          <p style="font-size: 13px;color:var(--color-secondary-light)" class="my-auto">Call of Duty mobile</p>
                                      </div>';
    }

    $html .= '<table width="100%" class="fs-6 transaction-table">
                            <tr>
                                <td width="30%">' . $firstTd . '</td>
                                <td width="70%">' . $valueFirstTd . '</td>
                            </tr>
                            <tr>
                                <td width="30%">Total Currency</td>
                                <td width="70%">' . $data->totCurrency . '</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card mx-auto transcation-card mb-3 text-start">
                <div class="card-body">
                    <div class="container">
                        <h4 style="font-size: 20px;line-height: 30px;font-weight: 600;color:var(--color-white);opacity:0.8">Account Information</h4>
                        <hr>
                        <table width="100%" class="fs-6 transaction-table">
                            <tr>
                                <td width="30%">' . $TableSecondFirstTd . '</td>
                                <td width="70%">' . $data->name . '</td>
                            </tr>
                            <tr>
                                <td width="30%">' . $TableSecondTd . '</td>
                                <td width="70%">' . $data->userId . '</td>
                            </tr>
                            <tr>
                                <td width="30%">Email</td>
                                <td width="70%">' . $data->email . '</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card mx-auto transcation-card mb-3 text-start">
                <div class="card-body">
                    <div class="container">
                        <h4 style="font-size: 20px;line-height: 30px;font-weight: 600;color:var(--color-white);opacity:0.8">' . $title2 . '</h4>
                        <hr>
                        <table width="100%" class="fs-6 transaction-table">
                            <tr>
                                <td width="30%">Bank</td>
                                <td width="70%">' . $data->bank . '</td>
                            </tr>
                            <tr>
                                <td width="30%">No Account</td>
                                <td width="70%">' . $data->noAccount . '</td>
                            </tr>
                            <tr>
                                <td width="30%">Fullname</td>
                                <td width="70%">' . $data->fullname . '</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>';

    return $html;
}
