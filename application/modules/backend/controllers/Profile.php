<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profilemodel','model');
	}

	public function index()
	{
		$this->template->load('templatedhas','profile/index');

    }


}