<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$array = array(
			'login' => false,
			'navbar' => '',
			'view' => 'home'
		);
		
		$this->session->set_userdata( $array );
	}

	public function index()
	{
		$this->set_navbar_by_login($this->session->login);
		$this->load->view($this->session->view, FALSE);
	}

	public function home2(){
		$array = array(
			'view' => 'home2'
		);
		
		$this->session->set_userdata( $array );

		$this->set_navbar_by_login($this->session->login);
		$this->load->view($this->session->view, FALSE);
	}

	public function home3(){
		$array = array(
			'view' => 'home3'
		);
		
		$this->session->set_userdata( $array );

		$this->set_navbar_by_login($this->session->login);
		$this->load->view($this->session->view, FALSE);
	}
	public function sign_up(){
		$this->session->view = "sign_up";
		
		$this->session->navbar = "navbar/_navbar_empty";
		$this->load->view($this->session->view, FALSE);
	}

	public function sign_in(){

		$this->session->navbar = "navbar/_navbar_empty";
		$this->load->view('sign_in', FALSE);
	}

	public function auth(){
		$this->session->login = true;
		$this->set_navbar_by_login($this->session->login);
		$this->load->view($this->session->view, FALSE);
	}

	public function sign_out(){
		$this->session->login = false;
		$this->set_navbar_by_login($this->session->login);
		$this->load->view('home', FALSE);
		$this->session->sess_destroy();
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

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */