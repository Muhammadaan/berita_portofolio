<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('homemodel','model');
	}

	public function index()
	{

		$data['terbaru']= $this->model->get_terbaru();

		// echo "<pre>";
		// var_dump($data);
		// exit();


		$this->template->load("template",'home/index',$data);
		
	}



}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */