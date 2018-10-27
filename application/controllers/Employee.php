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
			echo "<script>alert('ไปเข้าสู่ระบบก่อนไอควาย')</script>";
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

		$dataShow = $this->EmployeeModel->EmployeeSelect();

		$Value = array(
			'View' => "Employee",
			'Result' => array(
				'dataShow' => $dataShow,
			)
		);
		$this->LoadPage($Value);
	}

	public function EmployeeFormInsert()
	{

		$dataPosition = $this->PositionModel->PositionSelect();

		$Value = array(
			'View' => "EmployeeInsert",
			'Result' => array(
				'dataPosition' => $dataPosition,
			)
		);
		$this->LoadPage($Value);
	}

	public function EmployeeInsert()
	{

		$dataInsert = $this->input->post();

		// check Username ห้ามซ้ำ

		$check = $this->db
		->where('loginUsername',$dataInsert['loginUsername'])
		->get('login')
		->num_rows();

		if($check == 0){

			if(empty($_FILES['profileImage']['name'])){

				$dataInsert['profileImage'] = "noImg.png";
				// $this->debug->log($dataInsert);
				$this->EmployeeModel->EmployeeInsert($dataInsert);

				redirect("Employee");

			}else{

				$pathinfo = pathinfo($_FILES['profileImage']['name'], PATHINFO_EXTENSION);
				$new_file = date('YmdHis') . "." . $pathinfo;
				move_uploaded_file($_FILES['profileImage']['tmp_name'], "uploads/Employees/" . $new_file);

				$dataInsert['profileImage'] = $new_file;
				// $this->debug->log($dataInsert);
				$this->EmployeeModel->EmployeeInsert($dataInsert);

				redirect("Employee");

			}

		}else{

			echo "<script>alert('ไอดีเข้าสู่ระบบถูกใช้แล้ว')</script>";
			echo "<script>history.go(-1)</script>";

		}

	}

	public function EmployeeFormUpdate()
	{

		$profileId = $this->uri->segment(3);

		$dataUpdate = $this->EmployeeModel->EmployeeSelectForUpdate($profileId);
		$dataPosition = $this->PositionModel->PositionSelect();

		$Value = array(
			'View' => "EmployeeDetail",
			'Result' => array(
				'dataPosition' => $dataPosition,
				'dataUpdate' => $dataUpdate,
			)
		);
		$this->LoadPage($Value);
	}

	public function EmployeeUpdate()
	{

		$dataUpdate = $this->input->post();


		if(!empty($_FILES['profileImage']['name'])){

			$pathinfo = pathinfo($_FILES['profileImage']['name'], PATHINFO_EXTENSION);
			$new_file = date('YmdHis') . "." . $pathinfo;
			move_uploaded_file($_FILES['profileImage']['tmp_name'], "uploads/Employees/" . $new_file);

			$dataUpdate['profileImage'] = $new_file;
			// $this->debug->log($dataUpdate);
			$this->EmployeeModel->EmployeeUpdate($dataUpdate);

		}

		// $this->debug->log($dataUpdate);
		$this->EmployeeModel->EmployeeUpdate($dataUpdate);

		redirect("Employee");

	}

	public function EmployeeDelete()
	{
		$profileChoice = $this->uri->segment(3);
		$profileId = $this->uri->segment(4);
		$this->EmployeeModel->EmployeeDelete($profileChoice,$profileId);

		redirect("Employee");

	}

}
