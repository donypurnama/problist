<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('home_view');
		$this->load->view('template/foot');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */