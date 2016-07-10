<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->login==TRUE){
			redirect(base_url().'/index.php/home');
		}
		$this->load->library('form_validation');
		$this->load->model('Register_model', 'register_model', TRUE);
	}
	
	public function index(){
		$this->load->view('sign_up');
	}
	public function verify_data()
	{
		$this->form_validation->set_rules('email_register','email_r','required|valid_email');
		$this->form_validation->set_rules('namaLengkap_register','Nama_Lengkap','required');
		$this->form_validation->set_rules('password_register','Password_r','required|min_length[4]');
		$this->form_validation->set_rules('passwordAgain_register','PaswordAgain_r','required|matches[pasword_register]');
		
		if($this->form_validation->run()==FALSE){
			$this->load->view('sign_up');
		}
		else{
			if($this->register_model->isDuplicate($this->input->post('email'))){
                $this->session->set_flashdata('flash_message', 'User email already exists');
                redirect(base_url().'index.php/home');
			}else{
				//masukkan ke database
				$data=array(
					'email'=$_POST['email_register'];
					'password'=$_POST['password_register'];
					'nama_lengkap'=$_POST['namaLengkap_register'];
				)
				$this->register_model->registerAccount($data);
				//ke halaman login dan beri pesan sudah berhasil terdaftar
				redirect(base_url.'index.php/home');
			}
		}
	}
}
?>