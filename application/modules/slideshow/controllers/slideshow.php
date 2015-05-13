<?php 
	Class Slideshow extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function index()
		{
			$this->load->model('slide_model');
			$data['slide']=$this->slide_model->load_slide();
			$this->load->view('index',$data);
		}	
	}

