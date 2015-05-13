	<?php 
	Class Admin_category_post extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('category_post_model');
			$this->load->helper('slug');
			$this->load->helper('menu');
			check_admin();
		}

		public function index()
		{
			$temp['title']="Category post";
			$temp['template']='admin/index_category_post';
			$temp['data']['load_category']=$this->category_post_model->load_category();
			$this->load->view("admin/layout",$temp);
		}
		public function create_category()
		{
			
			$data['name_lang1']=$this->input->post('name_lang1');
			$data['name_lang2']=$this->input->post('name_lang2');
			$data['name_lang3']=$this->input->post('name_lang3');
			$data['parent_category']=$this->input->post('parent_category');
			$data['alias']=create_slug($data['name_lang1']);
			$this->category_post_model->create_category($data);
			redirect ('/admin_category_post');
		}
		public function edit_category()
		{
			$id=$this->input->get('id');
			$temp['data']['info_cat']=$this->category_post_model->info_category($id);
			$temp['data']['load_category']=$this->category_post_model->load_category();
			$temp['data']['id']=$id;
			$temp['title']="Edit Category post";
			$temp['template']='admin/edit_category_post';
			$this->load->view("admin/layout",$temp);

		}
		public function delete_category()
		{
			$id=$this->input->get('id');
			$this->category_post_model->delete_category($id);
			redirect('/admin_category_post');
		}
		public function update_category()
		{
			$data['id']=$this->input->post('id');
			$data['name_lang1']=$this->input->post('name_lang1');
			$data['name_lang2']=$this->input->post('name_lang2');
			$data['name_lang3']=$this->input->post('name_lang3');
			$data['parent_category']=$this->input->post('parent_category');
			$data['alias']=create_slug($data['name_lang1']);
			$this->category_post_model->update_category($data);
			redirect('/admin_category_post');
		}
	}

