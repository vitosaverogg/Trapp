<?php
	class Paket extends CI_Controller{
	
		public function index(){
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/index.php/paket';
			$config['total_rows'] = 20;
			$config['per_page'] = 8;

			$this->pagination->initialize($config);
			
			$this->load->model('paket_model');
			$this->session->view = "paket";
			$this->load->view($this->session->view);
		}
	}
?>