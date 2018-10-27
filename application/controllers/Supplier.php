<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

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

		$dataShow = $this->SupplierModel->SupplierSelect();
		// $this->debug->log($dataShow);


		$Value = array(
			'View' => "Supplier",
			'Result' => array(
				'dataShow' => $dataShow,
			)
		);
		$this->LoadPage($Value);
	}

	public function SupplierFormInsert()
	{

		$Value = array(
			'View' => "SupplierInsert",
			'Result' => array(
				// 'dataShow' => $dataShow,
			)
		);
		$this->LoadPage($Value);
	}

	public function SupplierInsert()
	{
		$dataInsert = $this->input->post();
		$dataInsert['supplierLog'] = "เพิ่มผู้จำหน่าย";
		$dataInsert['supplierLogName'] = $_SESSION['profileName'];
		// $this->debug->log($dataInsert);

		$this->SupplierModel->SupplierInsert($dataInsert);

		redirect('Supplier');
	}

	public function SupplierFormUpdate()
	{
		$supplierId = $this->uri->segment(3);
		$dataUpdate = $this->SupplierModel->SupplierSelectForUpdate($supplierId);
		// $this->debug->log($dataUpdate);

		$Value = array(
			'View' => "SupplierDetail",
			'Result' => array(
				'dataUpdate' => $dataUpdate,
			)
		);
		$this->LoadPage($Value);
	}

	public function SupplierUpdate()
	{
		$dataUpdate = $this->input->post();
		$dataUpdate['supplierLog'] = "แก้ไขผู้จำหน่าย";
		$dataUpdate['supplierLogName'] = $_SESSION['profileName'];
		// $this->debug->log($dataUpdate);

		$this->SupplierModel->SupplierUpdate($dataUpdate);

		redirect('Supplier');
	}

	public function SupplierDelete()
	{
		$supplierId = $this->uri->segment(3);
		// $this->debug->log($supplierId);
		$dataDelete = array(
			'supplierId' => $supplierId,
			'supplierStatus' => 2,
			'supplierLog' => "ลบผู้จำหน่าย",
			'supplierLogName' => $_SESSION['profileName'],
		);
		$this->SupplierModel->SupplierDelete($dataDelete);

		redirect('supplier');

	}


}
