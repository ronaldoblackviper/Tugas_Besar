<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('Model_crud');
	}
	public function index()
	{
		$this->load->view('Desain/beranda.html');
	}
	public function rentallogin()
	{
		$this->load->view('Desain/rentalmobillogin.html');
	}
	public function rental()
	{
		$this->load->view('Desain/rentalmobil.html');
	}
	public function about()
	{
		$this->load->view('Desain/tentang.html');
	}
	public function pencarian()
	{
		$this->load->view('Desain/pencarian.html');
	}
	public function registrasi()
	{
		$this->load->view('Desain/registrasi.html');
	}
	public function simpan()
	{
		$data = array('NIK' => $this->input->post('NIK'),'Plat_Mobil' => $this->input->post('Plat_Mobil'),'Nama' => $this->input->post('Nama'),'Alamat' => $this->input->post('Alamat'),'Tanggal_Peminjaman' => $this->input->post('Tanggal_Peminjaman'),'Tanggal_Pengembalian' => $this->input->post('Tanggal_Pengembalian'),'Foto_Diri' => $this->input->post('Foto_KTP'));
		$proses = $this->Model_crud->simpan($data);
		if(!$proses){
			header('Location: rental');
		}else{
			echo "Data Gagal Disimpan";
			echo "<br>";
			echo "<a href='".base_url('Welcome/rental')."'>Kembali ke form</a>";
		}
	}
	public function regis()
	{	
		$nameuser = $this->input->post('NamaUser');
    	$password1 = $this->input->post('KataSandi');
    	$password2 = $this->input->post('Konfirmasi');
    	
    	$cek = $this->Model_crud->cek_username($nameuser);
    	if(!$cek){
			if($password1 != $password2){
				echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
			}else{
				$daftar = array('Username' => $this->input->post('NamaUser'),'Password' => $this->input->post('KataSandi'),'Email' => $this->input->post('Email'));
				$proses = $this->Model_crud->regis($daftar);
				if(!$proses){
					header('Location: rentallogin');
				}else{
					echo "Data Gagal Disimpan";
					echo "<br>";
					echo "<a href='".site_url('Welcome/registrasi')."'>Kembali ke form</a>";
				}
			}
    	}else{
			echo "<script>alert('Username sudah digunakan, silahkan gunakan username yang lain');history.go(-1)</script>";
    	}
	}
	function proseslogin(){
         $username = $this->input->post('NamaUser');
         $password = $this->input->post('KataSandi');
         
         if ($this->Model_crud->cek_login($username, $password)){
              header('Location: rental');
         }else{
         	  echo "<script>alert('Username atau password salah');history.go(-1)</script>";
         }
     }     
}