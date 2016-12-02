<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homemodel extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	function get_terbaru()
	{
		
		$this->db->select('article.*,category.name as namecategory');
		$this->db->where('article.status', "active");
		$this->db->where('article.type', "blog");
		$this->db->join('category', 'article.category_id = category.id', 'left');
		$this->db->order_by('article.id', 'desc');
		$query = $this->db->get('article',4);
		$data  = $query->result();
		return $data;



	}

	

}

/* End of file Homemodel.php */
/* Location: ./application/models/Homemodel.php */