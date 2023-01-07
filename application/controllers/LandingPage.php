<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LandingPage extends CI_Controller
{

	public function __construct()

	{

		parent::__construct();

		$this->load->library('template');
	}
	public function index()
	{

		$data = [
			'title' => 'Homepage'
		];

		$this->template->loadViews('pages/index', $data);
	}
}
