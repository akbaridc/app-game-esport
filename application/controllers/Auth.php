<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()

    {

        parent::__construct();

        $this->load->library('template');
    }

    public function login()
    {

        $data = [
            'title' => 'Login'
        ];

        $this->template->loadViews('pages/auth/login', $data);
    }

    public function sign_up()
    {
        $data = [
            'title' => 'Sign Up'
        ];

        $this->template->loadViews('pages/auth/sign_up', $data);
    }

    public function forgot_password()
    {
        $data = [
            'title' => 'Forgot Password'
        ];

        $this->template->loadViews('pages/auth/forgot_password', $data);
    }

    public function reset_password()
    {
        $data = [
            'title' => 'Reset Password'
        ];

        $this->template->loadViews('pages/auth/reset_password', $data);
    }
}
