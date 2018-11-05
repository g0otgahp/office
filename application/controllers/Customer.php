<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

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
		$dataShow = $this->CustomerModel->CustomerSelect();

		$Value = array(
			'View' => "Customer",
			'Result' => array(
				'dataShow' => $dataShow,
			)
		);
		$this->LoadPage($Value);
	}

	public function CustomerForm()
	{

		$Value = array(
			'View' => "CustomerForm",
			'Result' => array(
				// 'dataShow' => $dataShow,
			)
		);
		$this->LoadPage($Value);
	}

	// public function CustomerInsert()
	// {
	// 	$dataInsert = $this->input->post();
	// 	$dataInsert['customerLog'] = "เพิ่มลูกค้า";
	// 	$dataInsert['customerLogName'] = $_SESSION['profileName'];
	// 	// $this->debug->log($dataUpdate);
	//
	// 	$this->CustomerModel->CustomerInsert($dataInsert);
	//
	// 	redirect('customer');
	//
	// }

	// public function CustomerFormUpdate()
	// {
	// 	$customerId = $this->uri->segment(3);
	// 	// $this->debug->log($customerId);
	// 	$dataUpdate = $this->CustomerModel->CustomerSelectForUpdate($customerId);
	//
	// 	$Value = array(
	// 		'View' => "CustomerDetail",
	// 		'Result' => array(
	// 			'dataUpdate' => $dataUpdate,
	// 		)
	// 	);
	// 	$this->LoadPage($Value);
	// }

	public function CustomerUpdate()
	{
		$dataUpdate = $this->input->post();
		$dataUpdate['customerLog'] = "แก้ไขลูกค้า";
		$dataUpdate['customerLogName'] = $_SESSION['profileName'];
		// $this->debug->log($dataUpdate);

		$this->CustomerModel->CustomerUpdate($dataUpdate);

		redirect('customer');

	}

	public function CustomerDelete()
	{
		$customerId = $this->uri->segment(3);
		// $this->debug->log($customerId);
		$dataDelete = array(
			'customerId' => $customerId,
			'customerStatus' => 2,
			'customerLog' => "ลบลูกค้า",
			'customerLogName' => $_SESSION['profileName'],
		);
		$this->CustomerModel->CustomerDelete($dataDelete);

		redirect('customer');

	}

}
