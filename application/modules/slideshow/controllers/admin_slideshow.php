<?php 
	Class Admin_slideshow extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('slide_model');	
			$this->load->helper(array('form', 'url'));
			check_admin();
		}
		public function index()
		{
			$temp['title']="Slideshow";
			$temp['template']='admin/list_all_slide';
			$temp['data']['slide']=$this->slide_model->load_slide();
			$this->load->view("admin/layout",$temp);
		}
		public function add_slideshow()
		{
			$temp['title']="Create A Slideshow";
			$temp['template']='admin/create_slideshow';
			$this->load->view("admin/layout",$temp);
		}
		public function up_slideshow()
		{

			$config['upload_path'] = './upload/images';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$data = $this->upload->data();
				$data['file_name']="/upload/images/".$data['file_name'];
				$this->slide_model->up_slideshow($data['file_name']);
				redirect ('/admin_slideshow');
			}
		}
		public function delete_slideshow()
		{
			$id=$this->input->get('id');
			$data= $this->slide_model->detail_slideshow($id);
			unlink('./'.$data['0']->link_img);
			$this->slide_model->del_slideshow($id);
			redirect('/admin_slideshow');
		}
		
	}

