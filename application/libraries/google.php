<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
//�u?ng d?n t?i thu m?c ch?a b? thu vi?n c?a m� b?n luu.
require_once APPPATH . 'third_party/google-api-php-client/src/Google/autoload.php';
 
class Google extends Google_Client {
 function __construct($params = array()) {
 parent::__construct();
 }
}
