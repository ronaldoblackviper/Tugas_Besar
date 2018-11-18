<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('Desain/beranda.html');
	}
	public function rental()
	{
		$this->load->view('Desain/rentalmobil.html');
	}
	public function about()
	{
		$this->load->view('Desain/about.html');
	}
	public function pencarian()
	{
		$this->load->view('Desain/pencarian.html');
	}
}