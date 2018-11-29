<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/

	public function __construct()
	{
		parent::__construct();
		@session_start();
		if(@$_SESSION['Status'] == "OFFICE_NEWZENO"){
			echo "<script>document.location='" . SITE_URL('Quotation') . "'</script>";
			// redirect("Dashboard");
		}
	}

	public function LoadPage($Value)
	{
		$this->load->view($Value['View']);
	}

	public function index()
	{
		$Value = array(
			'View' => "Login",
			'Result' => array(
				// 'Data' => $Data,
			)
		);
		$this->LoadPage($Value);
	}

	public function CheckLogin()
	{

		$checkLogin = $this->input->post();
		$dataLogin = $this->LoginModel->CheckLogin($checkLogin);

		if(count($dataLogin) == 1){
			$dataProfile = $this->LoginModel->SelectProfile($dataLogin);

			// echo "<pre>";
			// print_r($dataProfile[0]['profileStatus']);
			// exit();

			if($dataProfile[0]['profileStatus'] == 3){
				@session_start();
				$_SESSION['profileName'] = $dataProfile[0]['profilePrefix']." ".$dataProfile[0]['profileName']." ".$dataProfile[0]['profileSurname'];
				echo "<script>alert('". $_SESSION['profileName'] ." : คุณถูกพักงาน')</script>";
				echo "<script>window.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";

			}else if($dataProfile[0]['profileStatus'] == 2){
				echo "<script>alert('คำเตือน : คุณพ้นสภาพจาการเป็นพนักงานของบริษัทแล้ว')</script>";
				echo "<script>window.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";

			}else{
				@session_start();
				$_SESSION['profileId'] = $dataProfile[0]['profileId'];
				$_SESSION['loginUsername'] = $dataProfile[0]['loginUsername'];
				$_SESSION['profileName'] = $dataProfile[0]['profilePrefix']." ".$dataProfile[0]['profileName']." ".$dataProfile[0]['profileSurname'];
				$_SESSION['positionId'] = $dataProfile[0]['positionId'];
				$_SESSION['positionName'] = $dataProfile[0]['positionName'];
				$_SESSION['permission'] = $dataProfile[0]['permission'];
				$_SESSION['Status'] = 'OFFICE_NEWZENO';

				echo "<script>alert('เข้าสู่ระบบสำเร็จ : ". $_SESSION['profileName'] ."')</script>";
				echo "<script>window.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";

			}

		}else{
			echo "<script>alert('รหัสผ่าน ไม่ถูกต้องกรุณาตรวจสอบ !!')</script>";
			echo "<script>window.location='" . $_SERVER['HTTP_REFERER'] . "'</script>";
		}
	}

	public function Logout()
	{
		@session_start();
		@session_destroy();
		redirect("Login");


	}

}
