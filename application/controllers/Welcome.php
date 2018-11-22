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
	public function pencarianmobil()
	{
		$this->load->view('Desain/pencarianmobil');
	}
	public function registrasi()
	{
		$this->load->view('Desain/registrasi.html');
	}
	public function simpan()
	{	
		$Peminjaman = $this->input->post('Tanggal_Peminjaman');
		$Pengembalian = $this->input->post('Tanggal_Pengembalian');
		$pecah = explode("-", $Peminjaman);
		$tahun1 = $pecah[0];
		$bulan1 = $pecah[1];
		$hari1 = $pecah[2];
		
		$pecah1 = explode("-", $Pengembalian);
		$tahun2 = $pecah1[0];
		$bulan2 = $pecah1[1];
		$hari2 = $pecah1[2];

		$jd1 = GregorianToJD($bulan1, $hari1, $tahun1);
		$jd2 = GregorianToJD($bulan2, $hari2, $tahun2);

		$selisih = $jd2 -$jd1;
		if($selisih<0){
			echo "<script>alert('Tanggal tidak valid');history.go(-1)</script>";
		}else{
			$data = array('NIK' => $this->input->post('NIK'),'Plat_Mobil' => $this->input->post('Plat_Mobil'),'Nama' => $this->input->post('Nama'),'Alamat' => $this->input->post('Alamat'),'Tanggal_Peminjaman' => $this->input->post('Tanggal_Peminjaman'),'Tanggal_Pengembalian' => $this->input->post('Tanggal_Pengembalian'),'Foto_KTP' => $this->input->post('Foto_KTP'));
			$proses = $this->Model_crud->simpan($data);
			if(!$proses){
				header('Location: rental');
			}else{
				echo "Data Gagal Disimpan";
				echo "<br>";
				echo "<a href='".base_url('Welcome/rental')."'>Kembali ke form</a>";
			}
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
	public function proseslogin()
	{
         $username = $this->input->post('NamaUser');
         $password = $this->input->post('KataSandi');
         
         if ($this->Model_crud->cek_login($username, $password)){
              header('Location: rental');
         }else{
         	  echo "<script>alert('Username atau password salah');history.go(-1)</script>";
         }
     }
     public function Carimobil()
     {
     	 $model = $this->input->post('Model_Mobil');  	
     	 if($this->Model_crud->cari_mobil($model)){
     	 	  header('Location: pencarianmobil');
     	 }else{
         	  echo "<script>alert('Mobil yang dicari tidak tersedia, Silahkan cari mobil yang lain');history.go(-1)</script>";
     	 }    	
     }
 }