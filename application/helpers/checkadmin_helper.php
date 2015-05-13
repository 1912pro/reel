<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

function check_admin()
{	$CI = get_instance();
	$user= $CI->session->userdata('username');
	if ($user == null)
	 redirect ('admin_login');

}


