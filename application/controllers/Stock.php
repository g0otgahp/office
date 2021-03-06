<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

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

	public function Stock()
	{
		$Value = array(
			'View' => "Stock",
			'Result' => array(
				// 'dataShow' => $dataShow,
			)
		);
		$this->LoadPage($Value);
	}

	public function In()
	{
		$content = 'IN';
		$Value = array(
			'View' => "Stock",
			'Result' => array(
				// 'dataShow' => $dataShow,
			)
		);
		$this->LoadPage($Value);
	}

	public function Out()
	{
		$content = 'Out';
		$Value = array(
			'View' => "Stock",
			'Result' => array(
				// 'dataShow' => $dataShow,
			)
		);
		$this->LoadPage($Value);
	}

	// public function CustomerForm()
	// {
	//
	// 	$Value = array(
	// 		'View' => "StockForm",
	// 		'Result' => array(
	// 			// 'dataShow' => $dataShow,
	// 		)
	// 	);
	// 	$this->LoadPage($Value);
	// }


}
