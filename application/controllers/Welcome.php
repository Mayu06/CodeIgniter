<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('home');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('register');
	}

	/*function blog(){
		$data['author'] = 'Martin Wickramasinghe';
		$data['pub_date'] = '06-06-2019';
		$this->load->view('blog', $data);
	}*/
}
