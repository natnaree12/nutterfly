<?php
	/**
	* 
	*/
	class Order extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
            $this->load->model('model_test');
            $this->load->helper('url_helper');
		}

		public function index()
		{
			// $data['products'] = $this->model_test->get_products();

			$this->load->view('header');
			$this->load->view('view_order');
		}

		
	}
