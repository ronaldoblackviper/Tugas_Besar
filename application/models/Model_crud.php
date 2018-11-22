<?php
defined('BASEPATH') Or exit('NO direct script access allowed');

class Model_crud extends CI_Model{
	public function simpan($data)
	{
		$this->db->insert('booking',$data);
	}
	public function regis($daftar)
	{
		$this->db->insert('user',$daftar);
	}
	public function cek_login($username, $password){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('Username', $username);
		$this->db->where('Password', $password);
		
		return $this->db->get()->num_rows(); 
	}
	public function cek_username($username){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('Username', $username);
		
		return $this->db->get()->num_rows(); 
	}
}