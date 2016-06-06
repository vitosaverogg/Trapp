<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Planner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->session->view = "form_wizard/form_wizard";
		$this->load->view($this->session->view, FALSE);	
	}

	public function transportasi(){
		$this->session->view = "form_wizard/transportasi";
		$this->load->view($this->session->view);
	}

	public function paket(){
		$this->session->view = "paket";
		$this->load->view($this->session->view);
	}

	public function user_profile(){
		$this->session->view = "user_profile";
		$this->load->view($this->session->view);
	}
	
	public function invoice(){
		$this->session->view = "invoice";
		$this->load->view($this->session->view);
	}
	
	public function rental(){
		$this->session->view = "rental";
		$this->load->view($this->session->view);
	}
}

/* End of file Planner.php */
/* Location: ./application/controllers/Planner.php */