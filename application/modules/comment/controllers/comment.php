<?php 
	Class Comment extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('comment_model');
		}
		public function send_comment()
		{
			$type=$this->input->post('type_page');
			switch ($type) {
				case '2':
					$data['name_product'] = $this->input->post('name_product');
					$data['email']= $this->input->post('email');
					$data['body'] = $this->input->post('body');
					$data['type']=$type;
					$this->comment_model->create_comment_2($data);
					break;
				
				default:
					$data['name']= $this->input->post('name');
					$data['company']= $this->input->post('company');
					$data['email']= $this->input->post('email');
					$data['body'] = $this->input->post('body');
					$data['type']=$type;
					$this->comment_model->create_comment_1($data);
					
					break;
			}
			$temp['title']="thank you";
			$temp['data']="";
			$temp['template']='thankyou';
			$this->load->view("index/body",$temp);
		}
	}
