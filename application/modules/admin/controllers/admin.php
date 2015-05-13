<?php
	session_start();
	Class Admin extends MX_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('admin_model');
			// check_
		}
		public function login()
		{
			$this->load->view("login");
		}
		public function check_admin()
		{
			$dt['user']=trim($this->input->post('username'));
			$dt['pass']=trim($this->input->post('password'));
			$data=$this->admin_model->check_admin($dt);
			if ($data !=null)
			{
				echo 'OK';
				$this->session->set_userdata('username',$dt['user']);
			}
		}
		public function logout()
		{
			$this->session->sess_destroy();
			redirect('/admin_login');
		}
		function index() {
$this->load->library('google');
$client_id = '110238986819-4cf9tm4r67umf6cighpae8vq6t8lbbe5.apps.googleusercontent.com'; //Client ID
$service_account_name = '110238986819-4cf9tm4r67umf6cighpae8vq6t8lbbe5@developer.gserviceaccount.com'; //Email Address
$key_file_location = BASEPATH . '../application/third_party/google-api-php-client/test-thong-ke-fe6f6e03b05d.p12'; //key.p12
$client = new Google_Client();
$client->setApplicationName("ApplicationName"); //Cái này không quan trọng lắm, bạn có thể đặt tùy ý.
$analytics = new Google_Service_Analytics($client);
if (isset($_SESSION['service_token'])) {
$client->setAccessToken($_SESSION['service_token']);
}
//Đọc nội dung từ file key và xác thực tài khoản GA
$key = file_get_contents($key_file_location);
$cred = new Google_Auth_AssertionCredentials(
$service_account_name,
array(
'https://www.googleapis.com/auth/analytics',
),
$key,
'notasecret'
);
$client->setAssertionCredentials($cred);
if($client->getAuth()->isAccessTokenExpired()) {
$client->getAuth()->refreshTokenWithAssertion($cred);
}
$_SESSION['service_token'] = $client->getAccessToken();
$profileId = "ga:93592677";
$startDate = '7daysAgo';
//---------------------------------------------------------
$metrics = "ga:visits";
$optParams = array("dimensions" => "ga:country");
$stats = $analytics->data_ga->get($profileId, $startDate, 'yesterday', $metrics, $optParams);
$data['data']=$stats['rows'];
//---------------------------------------------------------
$metrics="ga:percentNewSessions,ga:exitRate";
$optParams=array("dimensions" => "");
$stats = $analytics->data_ga->get($profileId, $startDate, 'yesterday', $metrics, $optParams);
$data['data2']=$stats['rows'];
//---------------------------------------------------------
$metrics = "ga:newUsers,ga:users";
//Lấy giá trị theo giờ
$optParams = array("dimensions" => "ga:date");

$stats1 = $analytics->data_ga->get($profileId,  '7daysAgo','today', $metrics, $optParams);
$data['data1']=$stats1['rows'];
$data['template']='hinhtron';
$data['title']='Dashboard';
$this->load->view("admin/layout",$data);
}
	}
