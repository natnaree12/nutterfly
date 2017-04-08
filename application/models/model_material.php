<?php
	/**
	* 
	*/
	class Model_material extends CI_Model
	{
		
		public function __construct()
		{
			$this->load->database();
		}

		public function get_materials()
		{
			$query = $this->db->query('SELECT * FROM material_list ORDER BY amount_available asc');
			// $this->db->order_by('amount_available','desc');
			return $query->result();
		}

		public function get_material_by_type($type)
	    {
			$this->db->select('*');
			$this->db->from('material_list');
			$this->db->where('matcat_id', $type);
			$this->db->order_by('amount_available','asc');
			$query = $this->db->get();
			return $query->result(); 
	    }
	}