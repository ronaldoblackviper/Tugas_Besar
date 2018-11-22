<?php
defined('BASEPATH') Or exit('NO direct script access allowed');

class Model_crud extends CI_Model{
	public function simpan($data)
	{
		$this->db->insert('booking',$data);
	}
	public function tambah_mobil($data)
	{
		$this->db->insert('mobil',$data);
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
	public function cek_login_admin($username, $password){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('User_Admin', $username);
		$this->db->where('Pass_Admin', $password);
		
		return $this->db->get()->num_rows(); 
	}
	public function cek_username($username){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('Username', $username);
		
		return $this->db->get()->num_rows(); 
	}
	function search($keyword)
    {
        $this->db->like('Nama_Mobil',$keyword);
        $query = $this->db->get('mobil');
        return $query->result();
    }
    function tampilmobil()
    {
        $query = $this->db->get('mobil');
        return $query->result();
    }
    function tampiluser()
    {
        $query = $this->db->get('user');
        return $query->result();
    }
    function tampilbooking()
    {
        $query = $this->db->get('booking');
        return $query->result();
    }
}