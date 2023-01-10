<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Topup extends CI_Controller
{

    public function __construct()

    {

        parent::__construct();

        $this->load->library('template');
    }

    public function index()
    {
        $data = [
            'title' => 'Transaction'
        ];

        $this->template->loadViews('pages/topup/index', $data);
    }

    public function transaction()
    {
        $data = [
            'title' => 'Transaction'
        ];

        $this->template->loadViews('pages/topup/transaction', $data);
    }

    public function payment()
    {
        $data = [
            'title' => 'Transaction'
        ];

        $this->template->loadViews('pages/topup/payment', $data);
    }

    public function transaction_callback()
    {
        $data = [
            'title' => 'Transaction Success'
        ];

        $this->template->loadViews('pages/transaction_callback', $data);
    }
}
