<?php 
	Class Page_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function load_list_page()
		{
			$sql="select * from page";
			$query=$this->db->query($sql);
			return $query->result();
		}
		public function create_page($dt)
		{
			$sql="INSERT INTO `page`(`alias`,`title_lang1`, `title_lang2`, 
				`title_lang3`, `body_lang1`, `body_lang2`, `body_lang3`, `type_page`)
				VALUES (?,?,?,?,?,?,?,?)";
			$query=$this->db->query($sql,array($dt['alias'],$dt['title_lang1'],
				$dt['title_lang2'],$dt['title_lang3'],$dt['content_lang1'],
				$dt['content_lang2'],$dt['content_lang3'],$dt['type']));
		}
		public function delete_page($id)
		{
			$sql="delete from page where id=?";
			$query=$this->db->query($sql,array($id));

		}
		public function edit_page($id)
		{
			$sql="select * from page where id=?";
			$query=$this->db->query($sql,array($id));
			return $query->result();
		}
		public function update_page($dt)
		{
			$sql="UPDATE `page` SET `alias`=?,`title_lang1`=?,`title_lang2`=?,
			`title_lang3`=?,`body_lang1`=?,`body_lang2`=?,
			`body_lang3`=?,`type_page`=? WHERE id=?";
			$query=$this->db->query($sql,array($dt['alias'],$dt['title_lang1'],
				$dt['title_lang2'],$dt['title_lang3'],$dt['content_lang1'],
				$dt['content_lang2'],$dt['content_lang3'],$dt['type'],$dt['id_page']));
		}
	}

