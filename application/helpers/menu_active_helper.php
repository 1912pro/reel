<?php 
	function menu_active ($link)
	{
	 if ($_SERVER['REQUEST_URI'] == $link) 
	 	return 'class="active"';
	}
 ?>
