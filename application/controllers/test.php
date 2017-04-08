<?php
	/**
	* 
	*/
	class Test extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
            $this->load->model('model_test');
            $this->load->helper('url_helper');
		}

		public function index()
		{
			$data['products'] = $this->model_test->get_products();

			$this->load->view('header');
			$this->load->view('view_test', $data);
		}

		public function add()
		{
			// $data_to_store = array(
   //                  'bakery_name' => $this->input->post('bakery_name'),
   //                  'unit' => $this->input->post('unit'),
   //                  'price_per_unit' => $this->input->post('price_per_unit'),
   //                  'available' => $this->input->post('available')
   //              );
			if ($this->input->post('bakery_name') !== null) {
				$this->model_test->store_product($this->input->post());
				redirect(base_url('/index.php/test'));
			}
			$this->load->view('header');
			$this->load->view('view_add');

		}

		public function edit()
		{
			$id = $this->uri->segment(3);
			// echo $id;
			$data['products_edit'] = $this->model_test->get_product_by_id($id);
			// if ($this->input->post('bakery_name') !== null) {
			// 	$this->model_test->store_product($this->input->post());
			// 	redirect(base_url('/index.php/test'));
			// }



			$this->load->view('header');
			$this->load->view('view_edit', $data);
		}

		public function myfunction(){
			$this->load->database();

			$query = $this->db->query('SELECT id, field1, field2 FROM tablename');
			echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ลำดับ</th>";
            echo "<th>ชื่อขนมปัง</th>";
            echo "<th>หน่วย</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
			foreach ($query->result() as $row)
			{
				echo "<tr>";
		        echo "<td>".$row->bakery_id."</td>";
		        echo "<td>".$row->bakery_name."</td>";
		        echo "<td>".$row->unit."</td>";
		        echo "</tr>";
			}
			echo "</tbody>";
			echo "</table>";

			echo 'Total Results: ' . $query->num_rows();
		}
	}