<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artistas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function index()
	{
		$this->load->view('artistas');
	}
	public function a(){
		$this->load->view('artistas');
	}
}

