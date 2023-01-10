<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{

    public function __construct()

    {

        parent::__construct();

        $this->load->library('template');
    }
    public function index()
    {

        $data = [
            'title' => 'Setting'
        ];

        $this->template->loadViews('pages/user/setting/index', $data);
    }
}
