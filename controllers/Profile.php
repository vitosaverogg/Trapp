<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{	
		$nav = "navbar/_navbar_login";
		$this->session->navbar = $nav;
		$this->user_profile_profil();
		
	}
	public function user_profile(){
		$this->session->view = "user_profile";
		$this->load->view($this->session->view);
	}
	public function user_profile_profil(){
		$this->session->view = "user_profile_profil";
		$this->load->view($this->session->view);
	}
	
	public function set_navbar_by_login($login){
		if ($login){
			$nav = "navbar/_navbar_login";
		}else{
			$nav = "navbar/_navbar_not_login";
		}

		
		$this->session->navbar = $nav;
	}
}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */