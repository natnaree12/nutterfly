<?php
	/**
	* 
	*/
	class Model_purchase extends CI_Model
	{
		
		public function __construct()
		{
			$this->load->database();
		}

		public function get_po()
		{
			// $query = $this->db->query('SELECT * FROM purchase_list');
			// $this->db->order_by('amount_available','desc');
			$this->db->SELECT('po_item_id, mat_name, unit, amount');
			$this->db->from('purchase_list as p');
			$this->db->join('material_list as mat', 'mat.mat_id = p.mat_id', 'left');
			$query = $this->db->get();
			return $query->result();
		}

		public function delete_by_id($id)
		{
			$this->db->delete('purchase_list', array('po_item_id' => $id));
		}

	}