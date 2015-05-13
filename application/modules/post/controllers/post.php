<?php 
	Class Post extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('post_model');
			$this->load->library('breadcrumbs');
			$this->load->helper('text_limit');  
		}
		public function load_post()
		{
			$this->load->helper('getid');
			$id=getID($this->uri->segment('2'));
			if ($id != null)
			{
				$temp['data']=$this->post_model->detail_post($id);
				if ($temp['data'] != null)
				{
						$temp['title']=$temp['data']['0']->name_post_lang1;
						$temp['data']=$temp['data'];
						$temp['template']='detail_post';
						$temp['menu']=$this->breadcrumbs->show();
						$this->load->view("index/body",$temp);
				}
				else 
				{
					show_404();
				}
			}
			else
			{
				$id=getID($this->uri->segment('1'));
				$pag=($this->input->get('page')*6);
				$data=$this->post_model->load_post($id,$pag);
			if ($data ==null) // kiem tra co phai la trang chi tiet san pham khong?
				{
					$page=$this->post_model->load_page($id);
					if ($page != null) // kiem tra co phai la page khong
					{
						switch ($page['0']->type_page) {
							case '1':
								$temp['title']=$page['0']->title_lang1;
								$temp['data']=$page;
								$temp['template']='inguiries';
								$this->load->view("index/body",$temp);
								break;
							case '2':
								$temp['title']=$page['0']->title_lang1;
								$temp['data']=$page;
								$temp['template']='postareview';
								$this->load->view("index/body",$temp);
								break;
							default:
								$temp['title']=$page['0']->title_lang1;
								$temp['data']=$page;
								$temp['template']='page';
								$this->load->view("index/body",$temp);
								break;
						}

					}
					else 
					{
						show_404();
					}
				}
			else
				{
					$temp['title']=$data['0']->title_lang1;
					$temp['data']=$data;
					$temp['template']='category_post';
					$temp['total_rows'] = $this->post_model->count_all($id);
					$this->load->view("index/body",$temp);
				}
			}

		}
	}

