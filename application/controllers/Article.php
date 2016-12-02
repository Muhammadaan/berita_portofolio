<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('articlemodel','model');
	}

	public function index()
	{
		
	}


	public function detail($slug)
	{	
		// $this->model->count_read($slug);

		$article 	 			=$this->model->get_detail($slug);
		$data['article']  	 	=$article[0];
		$this->template->load('template','article/detail',$data);

		
	}

	// public function detail()
	// {
	// 	$this->template->load('template','article/detail');
		
	// }

}

/* End of file Article.php */
/* Location: ./application/controllers/Article.php */