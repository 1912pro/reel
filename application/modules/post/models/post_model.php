<?php 
	Class Post_model extends CI_Model
	
{
		public function __construct()
		{
			$this->load->database();
		}
		public function load_all_post()
		{
			$sql="select * from post";
			$query=$this->db->query($sql);
			return $query->result();
		}
		public function load_page($id)
		{
			$sql="select * from page where id=?";
			$query=$this->db->query($sql,$id);
			return $query->result();
		}
		public function load_category()
		{
			$sql="select * from category";
			$query=$this->db->query($sql);
			return $query->result();
		}
		public function create_post($dt)
		{
			$sql="UPDATE `post` SET `name_post_lang1`=?,
			`short_descript_lang1`=?,`descript_lang1`=?,
			`name_post_lang2`=?,`short_descript_lang2`=?,
			`descript_lang2`=?,`name_post_lang3`=?,
			`short_descript_lang3`=?,`descript_lang3`=?,
			`id_category`=? where key_post=?";
			$query=$this->db->query($sql,array(
				$dt['title_lang1'],$dt['short_lang1'],$dt['content_lang1'],
				$dt['title_lang2'],$dt['short_lang2'],$dt['content_lang2'],
				$dt['title_lang3'],$dt['short_lang3'],$dt['content_lang3'],
				$dt['category'],$dt['key']));

		}
		public function load_random_id()
		{
			$sql="SELECT FLOOR(RAND() * 9999) AS random_num
FROM post WHERE \"random_num\" NOT IN (SELECT key_post FROM post) limit 1";
            $query = $this->db->query($sql);
            return $query->result();
		}
		public function ss_add_name($dt)
		{
			$sql="INSERT INTO `post`( `key_post`, `name_post_lang1`, `alias_post`)
			VALUES (?,?,?)";
			$query=$this->db->query($sql,array($dt['key'],$dt['name_post'],
				$dt['slug']));
		}
		public function edit_name_post($dt)
		{
			$sql="UPDATE `post` SET `name_post_lang1`=? WHERE key_post=?";
			$this->db->query($sql,array($dt['name_post'],$dt['key']));
		}
		public function add_picture($dt)
		{	
			$sql="INSERT INTO `post`( `key_post`, `thumb_post`) VALUES (?,?)";
			$this->db->query($sql,array($dt['key'],$dt['link']));
		}
		public function del_thumb_post($id)
		{
			$sql="select thumb_post from post where id_post=?";
			$q=$this->db->query($sql,$id);
			return $q->result();
		}
		public function del_post($id)
		{
			$sql="delete from post where id_post=?";
			$this->db->query($sql,$id);
		}
		public function load_thumb_post($id)
		{
			$sql="select thumb_post from post where key_post=?";
			$query=$this->db->query($sql,array($id));
			return $query->result();
		}
		public function edit_picture($dt)
		{
			$sql="UPDATE `post` SET `thumb_post`=? WHERE key_post=?";
			$this->db->query($sql,array($dt['link'],$dt['key']));
		}
		public function detail_post($id)
		{
			$sql="select * from post inner join category on category.id=post.id_category where post.id_post=?";
			$query=$this->db->query($sql,array($id));
			return $query->result();
		}
		public function load_post($id,$offset)
		{
			$sql="select * from post inner join category on 
			category.id=post.id_category where post.id_category=? limit 6 offset $offset";
			$query=$this->db->query($sql,array($id));
			return $query->result();
		}
		function list_all($number, $offset){ 
            $query =  $this->db->get('post',$number,$offset); 
            return $query->result_array(); 
        } 
         
        // đếm tổng số record trong table book 
        function count_all($id){ 
            $sql="select * from post inner join category on category.id=post.id_category where post.id_category=?";
			$query=$this->db->query($sql,array($id));
			return $query->num_rows();
        } 
	}

