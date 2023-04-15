<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_perpus extends CI_Controller {

	
	public function index()
	{
		$this->load->view('front/head');
		$this->load->view('tentang_perpus/tentang_perpus');
	}
}