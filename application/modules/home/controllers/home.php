<?php
	Class Home extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function index()
		{
			$this->load->model('home_model');
			$temp['title']="Hose Reel Connection";
			$temp['data']=$this->home_model->load_features();
			$temp['template']="home";
			$this->load->view("index/body",$temp);
		}

	}

