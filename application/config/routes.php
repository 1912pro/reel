<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = '';
$route['admin_category_post']='category_post/admin_category_post';
$route['create_category_post']='category_post/admin_category_post/create_category';
$route['delete_category']='category_post/admin_category_post/delete_category';
$route['edit_category']='category_post/admin_category_post/edit_category';
$route['update_category']='category_post/admin_category_post/update_category';
$route['create_page']='page/admin_page/create_page';
$route['c_page']='page/admin_page/ac_create_page';
$route['edit_page']='page/admin_page/edit_page';
$route['manager_page']='page/admin_page';
$route['e_page']='page/admin_page/ac_edit_page';
$route['del_page']='page/admin_page/delete_page';

$route['edit_post']='post/admin_post/edit_post';
$route['del_post']='post/admin_post/del_post';
$route['c_post']='post/admin_post/create_post';
$route['ac_c_post']='post/admin_post/ac_create_post';
$route['ss_post']='post/admin_post/ss_add_name';
$route['up_thumb_post']='post/admin_post/up_thumb_post';
$route['load_thumb_post']='post/admin_post/load_thumb_post';
$route['admin_post']='post/admin_post';
$route['(:any)']='post/load_post';
$route['category/(:any)']='category_post/load_category';
$route['sl_language']='menu/select_language';

$route['admin_slideshow']='slideshow/admin_slideshow';
$route['c_slideshow']='slideshow/admin_slideshow/add_slideshow';
$route['up_slideshow']='slideshow/admin_slideshow/up_slideshow';
$route['del_slideshow']='slideshow/admin_slideshow/delete_slideshow';

$route['admin_feature']='home/admin_home';
$route['add_feature']='home/admin_home/add_feature';
$route['up_thumb_feature']='home/admin_home/up_thumb_feature';
$route['ss_create_features']='home/admin_home/ss_create_features';
$route['create_feature']='home/admin_home/create_feature';
$route['del_feature']='home/admin_home/del_feature';
$route['edit_feature']='home/admin_home/edit_feature';
$route['load_thumb']='home/admin_home/load_thumb';

$route['admin_comment']='comment/admin_comment/index';
$route['del_comment']='comment/admin_comment/del_comment';
$route['send_comment']='comment/send_comment';
$route['read_comment']='comment/admin_comment/read_comment';

$route['admin_login']='admin/login';
$route['check_admin']='admin/check_admin';
$route['admin']='admin/index';
$route['logout']='admin/logout';

$route['thongke']='admin/thongke';
/* End of file routes.php */
/* Location: ./application/config/routes.php */