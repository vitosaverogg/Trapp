<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['login']))
		{	
			$this->session->set_userdata('login',false);
		}
	}
	
	public function index()
	{
		$this->set_navbar_by_login($this->session->login);
		if($this->session->login==false){
			$this->load->view('home/home_2');
		}
		else{
			
		}
	}
	
	public function set_navbar_by_login($login){
		if ($login){
			$nav = "navbar/_navbar_login";
		}else{
			$nav = "navbar/_navbar_not_login";
		}

		
		$this->session->navbar = $nav;
	}
	//public function home
}

?>