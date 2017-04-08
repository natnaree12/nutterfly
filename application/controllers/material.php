<?php
	/**
	* 
	*/
	class Material extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
            $this->load->model('model_material');
            $this->load->helper('url_helper');
		}

		public function index()
		{
			$data['products'] = $this->model_material->get_materials();

			$this->load->view('header');
			$this->load->view('view_material', $data);
			$this->load->view('view_po_status');
		}

		public function view_raw_material()
		{
			$data['products'] = $this->model_material->get_material_by_type(11);

			$this->load->view('header');
			$this->load->view('view_material', $data);
			$this->load->view('view_po_status');
		}

		public function view_package()
		{
			$data['products'] = $this->model_material->get_material_by_type(12);

			$this->load->view('header');
			$this->load->view('view_material', $data);
			$this->load->view('view_po_status');
			
		}


	}