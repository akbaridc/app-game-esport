<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wallet extends CI_Controller
{

    public function __construct()

    {

        parent::__construct();

        $this->load->library('template');
    }

    public function index()
    {


        $data = [
            'title' => 'Wallet'
        ];

        $this->template->loadViews('pages/wallet/index', $data);
    }
}
