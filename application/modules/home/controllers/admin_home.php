<?php
	Class Admin_home extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('home_model');
			check_admin();
		}
		public function index()
		{
			$temp['title']="Admin features";
			$temp['data']=$this->home_model->load_features();
			$temp['template']='admin/admin_features';
			$this->load->view("admin/layout",$temp);
		}
		public function load_thumb()
    	{
	    	$id=$this->session->userdata('id');
	    	$data['data']=$this->home_model->detail_feature($id);
	        header('Content-type: text/json');              //3
	        header('Content-type: application/json');
	        echo json_encode($data['data']);
    	}
		public function edit_feature()
		{
			$id=$this->input->get('id');
			$this->session->set_userdata('id',$id);
			$temp['data']=$this->home_model->detail_feature($id);
			$this->session->set_userdata('ss_feature',$temp['data']['0']->name);
			if ($temp['data'] != null)
			{	
				$temp['title']="Edit feature";
				$temp['template']='admin/edit_feature';
				$this->load->view("admin/layout",$temp);
			}
			else
			{
				redirect('/admin_feature');		
			}
			
		}
		public function add_feature()
		{
			$temp['title']="Add features";
			$temp['template']='admin/create_feature';
			$this->load->view("admin/layout",$temp);
		}
		public function create_feature()
		{
			$data['ss']=$this->session->userdata('ss_feature');
			$data['name_feature']=$this->input->post('name_feature');
			$data['web_feature']=$this->input->post('web_feature');
			$data['link_catalog_feature']=$this->input->post('link_catalog_feature');
			$this->home_model->update_feature($data);
			$this->session->unset_userdata('ss_feature');
			redirect ('/admin_feature');
		}
		public function ss_create_features()
		{
			echo $ss=$this->session->userdata('ss_feature');
			$data['name_feature']=$this->input->post('name_feature');
			$data['ss']=$ss;
			if ($ss == null)
			{
				$this->home_model->create_name_feature($data['name_feature']);
			}
			else
			{
				$this->home_model->update_name_feature($data);
			}
			$this->session->set_userdata('ss_feature',$data['name_feature']);
		}
		public function up_thumb_feature()
		{
			if ($_FILES["file"]["name"])
			{
				$config['upload_path'] = './upload/images/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '10000';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
			if ( !$this->upload->do_upload('file'))
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
			else
				{
					$data['upload_data'] = $this->upload->data();
					$data['link'] = '/upload/images/'.$data['upload_data']['file_name'];
					$data['ss']=$this->session->userdata('ss_feature');
					$this->home_model->up_thumb_feature($data);
				}
			}
		}
		public function del_feature()
		{
			$id=$this->input->get('id');
			$data= $this->home_model->detail_feature($id);
			unlink('./'.$data['0']->thumb_img);
			$this->home_model->del_feature($id);
			redirect('/admin_feature');
		}
	}

