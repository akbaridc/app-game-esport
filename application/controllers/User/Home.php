<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()

    {

        parent::__construct();

        $this->load->library('template');
    }
    public function index()
    {

        $data = [
            'title' => 'Home'
        ];

        $this->template->loadViews('pages/user/home', $data);
    }
}
