<?php 
	Class Admin_post extends MX_Controller
	
{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('post_model');
			$this->load->helper('slug');
			check_admin();
		}
		public function index()
		{
			$temp['title']="List all post";
			$temp['template']='admin/list_post';
			$temp['data']['load_post']=$this->post_model->load_all_post();
			$this->load->view("admin/layout",$temp);
		}
		public function create_post()
		{
			$temp['title']="Add New Post";
			$temp['template']='admin/create_post';
			$temp['data']['load_category']=$this->post_model->load_category();
			$this->load->view("admin/layout",$temp);
		}
		public function edit_post()
		{
			$id=$this->input->get('id');
			print_r($this->post_model->detail_post($id));
		}
		public function ac_create_post()
		{
			$data['key']=$this->session->userdata('ss_post');
			$data['title_lang1']=$this->input->post('title_lang1');
			$data['title_lang2']=$this->input->post('title_lang2');
			$data['title_lang3']=$this->input->post('title_lang3');
			$data['short_lang1']=$this->input->post('short_des_lang1');
			$data['short_lang2']=$this->input->post('short_des_lang2');
			$data['short_lang3']=$this->input->post('short_des_lang3');
			$data['content_lang1']=$this->input->post('add_content_lang1');
			$data['content_lang2']=$this->input->post('add_content_lang2');
			$data['content_lang3']=$this->input->post('add_content_lang3');
			$data['category']=$this->input->post('category');
			$this->post_model->create_post($data);
			$this->session->unset_userdata('ss_post');
			redirect ('/c_post');
		}
		public function ss_add_name()
		{
			$data['name_post']=$this->input->post('name_post');
			$data['slug']=create_slug($data['name_post']);
			$key=$this->session->userdata('ss_post');
			if ($key==null)
			{
				$data['key']=$this->get_key_id();
				$this->session->set_userdata('ss_post',$data['key']);
				$this->post_model->ss_add_name($data);
			}
			else
			{
				$data['key']=$key;
				$this->post_model->edit_name_post($data);
			}
		}
		public function get_key_id()
   		{
        $key= $this->post_model->load_random_id();
        if ($key == null)
        {
            return $key="1346";
        }
        else
            return $key['0']->random_num;
    	}
    	public function load_thumb_post()
    	{
	    	$id=$this->input->get('id');
	    	if ($id== null)
	    	{
	    		$id=$this->session->userdata('ss_post');
	    	}
	        header('Content-type: text/json');              //3
	        header('Content-type: application/json');
	        echo json_encode($this->post_model->load_thumb_post($id));
    	}
    	public function up_thumb_post()
    	{
 		$key=$this->session->userdata('ss_post');      
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
        		}
            }      
         if ($key == null)
         {
            $data['key']=$this->get_key_id();
            $this->session->set_userdata('ss_post',$data['key']);
            $this->post_model->add_picture($data);
         }
         else
         {
            $data['key']=$key;
            $this->post_model->edit_picture($data);
         }        
         
    	}
    	public function del_post()
    	{
    		$id=$this->input->get('id');
    		$link= $this->post_model->del_thumb_post($id);
    		unlink($link[0]->thumb_post);
    		$this->post_model->del_post($id);
    		redirect('/admin_post');
    	}

	}

