<?php 
	Class Category_post_model extends CI_model
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function create_category($dt)
		{
			$sql="INSERT INTO `category`(`alias`, `title_lang1`, `title_lang2`, `title_lang3`, `level`) 
			VALUES (?,?,?,?,?)";
			$query=$this->db->query($sql,array($dt['alias'],$dt['name_lang1']
				,$dt['name_lang2'],$dt['name_lang3'],$dt['parent_category']));

		}
		public function load_category()
		{
			$sql="select * from category ";
			$query=$this->db->query($sql);
			return $query->result();
		}
		public function load_post($id) // load post trong 1 category
		{
			$sql="select * from post where id_category=?";
			$query=$this->db->query($sql,array($id));
			return $query->result();
		}
		public function delete_category($id)
		{
			$sql="delete from category where id=?";
			$query=$this->db->query($sql,array($id));
		}
		public function info_category($id)
		{
			$sql="select * from category where id=?";
			$query=$this->db->query($sql,array($id));
			return $query->result();
		}
		public function update_category($dt)
		{
			$sql="UPDATE `category` SET `alias`=?,`title_lang1`=?,`title_lang2`=?,`title_lang3`=?,`level`=? WHERE id=?";
			$query=$this->db->query($sql,array($dt['alias'],$dt['name_lang1'],$dt['name_lang2'],$dt['name_lang3'],$dt['parent_category'],$dt['id']));
		}
	}

