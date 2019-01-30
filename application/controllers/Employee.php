<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

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
		if(@$_SESSION['Status'] != "OFFICE_NEWZENO"){
			echo "<script>alert('กรุณาเข้าสู่ระบบ')</script>";
			echo "<script>document.location='" . SITE_URL() . "'</script>";
			// redirect("Login");
		}
	}

	public function LoadPage($Value)
	{

		$data = $Value['Result'];

		$this->load->view("templates/header",$data);
		$this->load->view("templates/menu");
		$this->load->view($Value['View']);
		$this->load->view("templates/footer");
	}

	public function index()
	{

		$Value = array(
			'View' => "Employee",
			'Result' => array(
				// 'dataShow' => $dataShow,
			)
		);
		$this->LoadPage($Value);
	}

	public function EmployeeForm()
	{

		$Value = array(
			'View' => "EmployeeForm",
			'Result' => array(
				// 'dataPosition' => $dataPosition,
			)
		);
		$this->LoadPage($Value);
	}

	public function SignatureForm()
	{

		$Value = array(
			'View' => "SignatureForm",
			'Result' => array(
			)
		);
		$this->LoadPage($Value);
	}

	public function SignatureSave()
	{
		$input = $this->input->post();
		if (!empty($_FILES['profileSigImage']['name'])) {
      $pathinfo = pathinfo($_FILES['profileSigImage']['name'], PATHINFO_EXTENSION);
      $new_file = "SIG".date('YmdHis') . "." . $pathinfo;
      move_uploaded_file($_FILES['profileSigImage']['tmp_name'], "uploads/Signature/" . $new_file);
      $input['profileSigImage'] = $new_file;
    }
		$this->db->where('profileId',$input['profileId'])->update('profile',$input);
		$_SESSION['profileSigImage'] = $input['profileSigImage'];
		redirect('Employee/SignatureForm');
	}

	public function SignatureStatus()
	{
		$profileId = $this->uri->segment(3);
		$SigOn = $this->uri->segment(4);
		if ($profileId == $_SESSION['profileId'] && $SigOn == $_SESSION['profileSigOn']) {

			if ($SigOn == 1) {
				$inputSigOn = 2;
			} else {
				$inputSigOn = 1;
			}

			$input = array(
				'profileId' => $profileId,
				'profileSigOn' => $inputSigOn,
			 );

			$this->db->where('profileId',$input['profileId'])->update('profile',$input);
			$_SESSION['profileSigOn'] = $input['profileSigOn'];
			redirect('Employee/SignatureForm');
		} else {
			echo "<script>alert('สิทธิการเข้าถึงไม่ตรงกัน')</script>";
			echo "<script>document.location='" . SITE_URL('Employee/SignatureForm') . "'</script>";
			}
	}

}
