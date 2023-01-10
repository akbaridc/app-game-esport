<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tournament extends CI_Controller
{

    public function __construct()

    {

        parent::__construct();

        $this->load->library('template');
    }

    public function index()
    {


        $data = [
            'title' => 'Tournament'
        ];

        $this->template->loadViews('pages/tournament/index', $data);
    }

    public function detail()
    {

        $data = [
            'title' => 'Mobile Legend (slug)'
        ];

        $this->template->loadViews('pages/tournament/detail', $data);
    }

    public function bracket()
    {

        $data = [
            'title' => 'Bracket'
        ];

        $this->template->loadViews('pages/tournament/bracket', $data);
    }
}
