<?php 
	Class Admin_comment extends MX_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			$this->load->model('comment_model');
			check_admin();
		}
		public function index()
		{
			$temp['title']="Comment";
			$temp['template']='list_comment';
			$temp['data']=$this->comment_model->load_comment();
			$this->load->view("admin/layout",$temp);
		}
		public function read_comment()
		{
			$id=$this->input->get('id');
			$data['title']="Detail Comment";
			$data['data']=$this->comment_model->detail_comment($id);
			$data['template']='detail_comment';
			$this->load->view('admin/layout',$data);	
		}
		public function del_comment()
		{
			$id=$this->input->get('id');
			$this->comment_model->del_comment($id);
			redirect ('/admin_comment');
		}
	}

