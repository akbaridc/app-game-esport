<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{

    public function __construct()

    {

        parent::__construct();

        $this->load->library('template');
    }

    public function index()
    {


        $data = [
            'title' => 'History'
        ];

        $this->template->loadViews('pages/history/index', $data);
    }
}
