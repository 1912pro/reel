<?php 
	Class Home_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function del_feature($id)
		{
			$sql="delete from features where id=?";
			$this->db->query($sql,$id);
		}
		public function detail_feature($id)
		{
			$sql="select * from features where id=?";
			$q=$this->db->query($sql,$id);
			return $q->result();
		}
		public function load_features()
		{
			$sql="select * from features";
			$query=$this->db->query($sql);
			return $query->result();
		}
		public function create_name_feature($name)
		{
			$sql="INSERT INTO `features`(`name`) VALUES (?)";
			$this->db->query($sql,$name);
		}
		public function update_name_feature($dt)
		{
			$sql="UPDATE `features` SET `name`=? WHERE name=?";
			$this->db->query($sql,array($dt['name_feature'],$dt['ss']));
		}
		public function up_thumb_feature($dt)
		{
			$sql="UPDATE `features` SET `thumb_img`=? WHERE name=?";
			$this->db->query($sql,array($dt['link'],$dt['ss']));
		}
		public function update_feature($dt)
		{
			$sql="UPDATE `features` SET `name`=?,`website`=?,`link_download`=? WHERE name=?";
			$this->db->query($sql,array($dt['name_feature'],$dt['web_feature'],$dt['link_catalog_feature'],$dt['ss']));
		}

	}

