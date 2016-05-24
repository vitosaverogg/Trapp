<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public $view;

	public function __construct()
	{
		parent::__construct();
		$this->view = "home";
	}

	public function index()
	{
		// not login
		$data = $this->setNavbar("_navbar_not_login");
		$this->load->view('home', $data, FALSE);
	}

	public function sign_up(){
		$this->view = "sign-up";
		// not login
		$data = $this->setNavbar("_navbar_empty");
		$this->load->view('sign_up', $data, FALSE);
	}

	public function sign_in(){
		$this->view = "sign_in";
		// not login
		$data = $this->setNavbar("_navbar_empty");
		$this->load->view('sign_in', $data, FALSE);
	}

	public function auth(){
		//login
		$data = $this->setNavbar("_navbar_login");
		$this->load->view($this->view, $data, FALSE);
	}

	public function sign_out(){
		$data = $this->setNavbar("_navbar_not_login");
		$this->load->view('home', $data, FALSE);
	}

	public function setNavbar($nav){
		$navbar = array('navbar' => $nav, );
		$data = array('navbar' => $navbar, );
		return $data;
	}

}

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */