<?php 
	Class Comment_model extends 
CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function create_comment_2($dt)
		{
			$sql="INSERT INTO `comment`(`email`, `product`, 
				`body`, `type_page`) VALUES (?,?,?,?)";
			$this->db->query($sql,array($dt['email'],
				$dt['name_product'],$dt['body'],$dt['type']));
		}
		public function create_comment_1($dt)
		{
			$sql="INSERT INTO `comment`( `email`, `name`, 
				`company`, `body`, `type_page`) 
				VALUES (?,?,?,?,?)";
				$this->db->query($sql,array($dt['email'],
					$dt['name'],$dt['company'],$dt['body'],$dt['type']));
		}
		public function load_comment()
		{
			$sql="select * from comment";
			$q=$this->db->query($sql);
			return $q->result();
		}
		public function del_comment($id)
		{
			$sql="delete from comment where id=?";
			$this->db->query($sql,$id);
		}
		public function detail_comment($id)
		{
			$sql="select * from comment where id=?";
			$q=$this->db->query($sql,$id);
			return $q->result();
		}
	}
