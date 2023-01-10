<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()

    {

        parent::__construct();

        $this->load->library('template');
    }
    public function index()
    {

        $data = [
            'title' => 'Profile'
        ];

        $this->template->loadViews('pages/user/profile/index', $data);
    }
}
