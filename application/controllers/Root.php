<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Root extends CI_Controller {

	public function index()
	{
		$this->load->model('user_model', 'user');
		$data['query'] = $this->user->testDB();
		$this->load->view('index', $data);
	}
	
	public function dashboard(){
		$this->load->model('user_model', 'user');
		$data['user'] = $this->user->getUser();
		$data['fecha'] = "2015-08-15";
		$this->load->view('dashboard', $data);
	}
}
