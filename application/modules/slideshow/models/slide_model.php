<?php 
	Class Slide_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function index()
		{
			echo 'asdasda';
		}
		public function load_slide()
		{
			$sql="select * from slideshow";
			$query=$this->db->query($sql);
			return $query->result();
		}
		public function up_slideshow($dt)
		{
			$sql="INSERT INTO `slideshow`(`link_img`) VALUES (?)";
			$this->db->query($sql,$dt);
		}
		public function detail_slideshow($id)
		{
			$sql="select link_img from slideshow where id= ?";
			$query=$this->db->query($sql,$id);
			return $query->result();
		}
		public function del_slideshow($id)
		{
			$sql="delete from slideshow where id=?";
			$this->db->query($sql,$id);
		}
	}

