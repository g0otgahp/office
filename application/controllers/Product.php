<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
		$dataShow = $this->ProductModel->ProductSelect();

		$Value = array(
			'View' => "Product",
			'Result' => array(
				'dataShow' => $dataShow,
			)
		);
		$this->LoadPage($Value);
	}

	public function ProductFormInsert()
	{

		$Value = array(
			'View' => "productInsert",
			'Result' => array(
				// 'dataShow' => $dataShow,
			)
		);
		$this->LoadPage($Value);
	}

	public function ProductInsert()
	{
		$dataInsert = $this->input->post();
		$dataInsert['productLog'] = "เพิ่มสินค้า";
		$dataInsert['productLogName'] = $_SESSION['profileName'];
		// $this->debug->log($dataInsert);
		$this->ProductModel->ProductInsert($dataInsert);

		redirect('product');

	}

	public function ProductFormUpdate()
	{
		$productId = $this->uri->segment(3);
		// $this->debug->log($productId);
		$dataUpdate = $this->ProductModel->ProductSelectForUpdate($productId);

		$Value = array(
			'View' => "ProductDetail",
			'Result' => array(
				'dataUpdate' => $dataUpdate,
			)
		);
		$this->LoadPage($Value);
	}

	public function ProductUpdate()
	{
		$dataUpdate = $this->input->post();
		$dataUpdate['productLog'] = "แก้ไขสินค้า";
		$dataUpdate['productLogName'] = $_SESSION['profileName'];
		// $this->debug->log($dataUpdate);

		$this->ProductModel->ProductUpdate($dataUpdate);

		redirect('product');

	}

	public function ProductDelete()
	{
		$productId = $this->uri->segment(3);
		// $this->debug->log($productId);
		$dataDelete = array(
			'productId' => $productId,
			'productStatus' => 2,
			'productLog' => "ลบสินค้า",
			'productLogName' => $_SESSION['profileName'],
		);
		$this->ProductModel->ProductDelete($dataDelete);

		redirect('product');

	}

}
