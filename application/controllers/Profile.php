<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		
	}
	public function user_profile(){
		$this->session->view = "user_profile";
		$this->load->view($this->session->view);
	}
	public function user_profile_profil(){
		$this->session->view = "user_profile_profil";
		$this->load->view($this->session->view);
	}
}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */