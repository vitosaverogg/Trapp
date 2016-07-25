<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$array = array(
			'login' => false,
			'navbar' => '',
			'view' => 'home/home_2'
		);
		$this->load->model('home/Account_model', '', TRUE);
		$this->session->set_userdata( $array );
	}

	public function test(){
		echo $this->Account_model->login('rasyid@gmailscom','aaaa');
		echo $this->Account_model->login('rasyid@gmail.com','aaaa');
	}
	
	public function index()
	{
		$this->set_navbar_by_login($this->session->login);
		$this->load->view($this->session->view, FALSE);
	}

	public function sign_up(){
		$this->session->view = "sign_up";
		
		$this->session->navbar = "navbar/_navbar_empty";
		$this->load->view($this->session->view, FALSE);
	}
//ketika menekan tombol sign in
	public function sign_in(){
		//validasi
		$this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
			$this->form_validation->set_rules('email_login','Email','required');
			$this->form_validation->set_rules('password_login','Password','required');

            if ($this->form_validation->run() == FALSE)
            {
                echo 'gagal';
            }
            else
            {
				$password	=$_POST['password_login'];
				$email		=$_POST['email_login'];
				if($this->Account_model->login($email, $password)){
					echo 'berhasil';
				}
                
            }
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