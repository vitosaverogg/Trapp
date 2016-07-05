<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {

	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
	}

	//melakukan pengecekan id dan password ada dan cocok
	public function login($email, $password){
		
		$array		=array('email'=>$email, 'password'=>$password);
		$this->load->database();
		$query		=$this->db->get_where('user',$array);
		
		$row= $query->row();
		
		if(!isset($row)){
			return false;
		}else{
			return true;
		}
	}
	
}