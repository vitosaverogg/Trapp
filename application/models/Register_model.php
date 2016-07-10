<?php
class Register_model extends CI_Model {
	function __construct(){
        // Call the Model constructor
        parent::__construct();        
        
    }
	
	public function isDuplicate($email){
		$this->db->get_where('user', array('email' => $email), 1);
        return $this->db->affected_rows() > 0 ? TRUE : FALSE;       
	}
	
	public function registerAccount($array){
		$email=$array['email'];
		$nama_lengkap=$array['nama_lengkap'];
		$password=$array['password'];
		$data= array(
			'email'=>$email,
			'password'=>$password,
			'nama_lengkap'=>$nama_lengkap,
		)
		$this->db->insert('user',$data);
	}
}
?>