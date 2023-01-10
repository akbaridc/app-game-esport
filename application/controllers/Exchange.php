<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Exchange extends CI_Controller
{

    public function __construct()

    {

        parent::__construct();

        $this->load->library('template');
    }

    public function index()
    {


        $data = [
            'title' => 'Exchange'
        ];

        $this->template->loadViews('pages/exchange/index', $data);
    }

    public function detail()
    {

        $data = [
            'title' => 'Mobile Legend (slug)'
        ];

        $this->template->loadViews('pages/exchange/detail', $data);
    }

    public function transaction()
    {
        $data = [
            'title' => 'Transaction'
        ];

        $this->template->loadViews('pages/exchange/transaction', $data);
    }

    public function transaction_callback()
    {
        $data = [
            'title' => 'Transaction Success'
        ];

        $this->template->loadViews('pages/transaction_callback', $data);
    }
}
