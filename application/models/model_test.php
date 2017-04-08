<?php
	/**
	* 
	*/
	class Model_test extends CI_Model
	{
		
		public function __construct()
		{
			$this->load->database();
		}

		public function get_products()
		{
			$query = $this->db->query('SELECT * FROM bakery');
			return $query->result();
		}

		public function store_product($data)
	    {
			$insert = $this->db->insert('bakery', $data);
		    return $insert;
		}

		public function get_product_by_id($id)
	    {
			$this->db->select('*');
			$this->db->from('bakery');
			$this->db->where('bakery_id', $id);
			$query = $this->db->get();
			return $query->result_array(); 
	    }
	}