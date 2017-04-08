<?php
	/**
	* 
	*/
	class Purchase extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
            $this->load->model('model_purchase');
            $this->load->helper('url_helper');
		}

		public function index()
		{
			$data['items'] = $this->model_purchase->get_po();

			$this->load->view('header');
			$this->load->view('view_purchase', $data);
			// $this->load->view('view_po_status');
		}

		public function delete(){
			$id = $this->uri->segment(3);
			// echo $id;
			$this->model_purchase->delete_by_id($id);

			$data['items'] = $this->model_purchase->get_po();

			$this->load->view('header');
			$this->load->view('view_purchase', $data);
			// redirect('/purchase', 'refresh');
		}
	}