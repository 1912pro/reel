<?php 
	Class Menu extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();

		}
		public function index()
		{
			$this->load->view('index');
		}
		public function select_language()
		{
			$lang=$this->input->post('lang');
			switch ($lang) {
				case 'lang2':
					$this->session->set_userdata('language','lang2');
					break;
				case 'lang3':
					$this->session->set_userdata('language','lang3');
					break;
				default:
					$this->session->set_userdata('language','lang1');
					break;
			}
		}
	}
 ?>

