<?php   /////////////////////////////////
		// public function id()
		// {
		// 	  $params = $this->uri->segment(4);
		// 	  $this->load->helper("GetIdProduct");
		// 	  echo getIDProduct_link($params);
		// 	  print_r($params);
		// }
		////////cach su dung
function getID($product_id)
		{
		     return substr($product_id,(strrpos($product_id, "-")+1),9);
		}
		?>