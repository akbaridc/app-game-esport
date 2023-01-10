<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Withdraw extends CI_Controller
{

    public function __construct()

    {

        parent::__construct();

        $this->load->library('template');
    }

    public function index()
    {
        $data = [
            'title' => 'Withdraw'
        ];

        $this->template->loadViews('pages/withdraw/index', $data);
    }

    public function transaction()
    {
        $data = [
            'title' => 'Transaction'
        ];

        $this->template->loadViews('pages/withdraw/transaction', $data);
    }

    public function transaction_callback()
    {
        $data = [
            'title' => 'Transaction Success'
        ];

        $this->template->loadViews('pages/transaction_callback', $data);
    }
}
