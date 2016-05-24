<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Planner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();


	}

	public function index()
	{
		$this->session->view = "form_wizard";
		// not login
		$navbar = array('navbar' => "_navbar_not_login", );
		$data = array('navbar' => $navbar, );
		$this->load->view('form_wizard', $data, FALSE);	
	}

}

/* End of file Planner.php */
/* Location: ./application/controllers/Planner.php */