<?php 
	Class Admin_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}
		public function check_admin($dt)
		{
			$sql="select * from username where username=? and password=?";
			$q=$this->db->query($sql,array($dt['user'],md5($dt['pass'])));
			return $q->result();
		}
	}

