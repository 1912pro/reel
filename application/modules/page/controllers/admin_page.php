<?php 
	Class 
Admin_page extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('page_model');
			$this->load->helper('slug');
			check_admin();
		}
		public function index()
		{
			$temp['title']="Page";
			$temp['template']='admin/list_page';
			$temp['data']['load_page']=$this->page_model->load_list_page();
			$this->load->view("admin/layout",$temp);
		}
		public function create_page()
		{
			$temp['title']="Add new page ";
			$temp['template']='admin/create_page';
			$this->load->helper('ckeditor');
        	$temp['data']['ckeditor'] = array(
            'id' => 'add_content',
            'path' => 'libraries/ckeditor'
        );
			$this->load->view("admin/layout",$temp);
		}
		public function ac_create_page()
		{
			$data['title_lang1']=$this->input->post('title_page_lang1');
			$data['alias']=create_slug($data['title_lang1']);
			$data['title_lang2']=$this->input->post('title_page_lang2');
			$data['title_lang3']=$this->input->post('title_page_lang3');
			$data['content_lang1']=$this->input->post('add_content_lang1');
			$data['content_lang2']=$this->input->post('add_content_lang2');
			$data['content_lang3']=$this->input->post('add_content_lang3');
			$data['type']=$this->input->post('type_page');
			if ($data['title_lang2']== null)
			{
				$data['title_lang2']=$data['title_lang1'];
			}
			else if ($data['title_lang3']== null)
			{
				$data['title_lang3']=$data['title_lang1'];
			}
			if ($data['content_lang2']== null)
			{
				$data['content_lang2']=$data['content_lang1'];
			}
			else if ($data['content_lang3']== null)
			{
				$data['content_lang3']=$data['content_lang1'];
			}
			$this->page_model->create_page($data);
			redirect ('/manager_page');
			// print_r($data);
		}
		public function edit_page()
		{
			$id=$this->input->get('id');
			$temp['data']['info_page']=$this->page_model->edit_page($id);
			$temp['data']['id_page']=$id;
			$temp['title']="Edit page ";
			$temp['template']='admin/edit_page';
			$this->load->view("admin/layout",$temp);
		}
		public function ac_edit_page()
		{

			$data['title_lang1']=$this->input->post('title_page_lang1');
			$data['alias']=create_slug($data['title_lang1']);
			$data['title_lang2']=$this->input->post('title_page_lang2');
			$data['title_lang3']=$this->input->post('title_page_lang3');
			$data['content_lang1']=$this->input->post('add_content_lang1');
			$data['content_lang2']=$this->input->post('add_content_lang2');
			$data['content_lang3']=$this->input->post('add_content_lang3');
			$data['id_page']=$this->input->post('id_page');
			$data['type']=$this->input->post('type_page');
			if ($data['title_lang2']== null)
			{
				$data['title_lang2']=$data['title_lang1'];
			}
			else if ($data['title_lang3']== null)
			{
				$data['title_lang3']=$data['title_lang1'];
			}
			if ($data['content_lang2']== null)
			{
				$data['content_lang2']=$data['content_lang1'];
			}
			else if ($data['content_lang3']== null)
			{
				$data['content_lang3']=$data['content_lang1'];
			}
			$this->page_model->update_page($data);
			redirect('/manager_page');
		}
		public function delete_page()
		{
			$id=$this->input->get('id');
			$this->page_model->delete_page($id);
			redirect('/manager_page');
		}
	}

