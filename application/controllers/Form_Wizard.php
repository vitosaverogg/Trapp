<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_Wizard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('form_wizard');
	}

}

/* End of file Form_Wizard.php */
/* Location: ./application/controllers/Form_Wizard.php */