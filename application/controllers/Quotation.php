<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotation extends CI_Controller {

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
		$id = $_SESSION['profileId'];
		$QuotationList = $this->QuotationModel->LoadQuotation($id);
		$Value = array(
			'View' => "Quotation",
			'Result' => array(
				'QuotationList' => $QuotationList,
			)
		);
		$this->LoadPage($Value);
	}

	public function quotationform()
	{
		$employeeID = $this->uri->segment(3);
		if ($_SESSION['profileId'] == $employeeID) {
			$Value = array(
				'View' => "QuotationForm",
				'Result' => array(
					// 'dataShow' => $dataShow,
				)
			);
			$this->LoadPage($Value);
		} else {
			echo "<script>alert('สิทธิการออกใบเสนอราคาไม่ตรงกัน')</script>";
			echo "<script>document.location='" . SITE_URL() . "'</script>";
		}
	}

	public function Document()
	{
		$id = base64_decode($this->uri->segment(4));
		$Select = $this->QuotationModel->SelectQuotation($id);
		$data = array(
			'Select' => $Select,
		);
		$this->load->view('document/quotation',$data);
	}

	public function Cancel()
	{
		$id = base64_decode($this->uri->segment(4));
		$input = array(
			'quoId' => $id,
			'quoStatus' => 3,
		);
		$Select = $this->QuotationModel->UpdateQuotation($input);
		redirect('Quotation');
	}

	public function Accept()
	{
		$id = base64_decode($this->uri->segment(4));
		$input = array(
			'quoId' => $id,
			'quoStatus' => 1,
		);
		$Select = $this->QuotationModel->UpdateQuotation($input);
		redirect('Quotation');
	}




}
