<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Position extends CI_Controller {

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
		$this->load->view("PositionInsert");
		$this->load->view("PositionUpdate");
		$this->load->view("templates/footer");
	}

	public function index()
	{

		$dataShow = $this->PositionModel->PositionSelect();

		$Value = array(
			'View' => "Position",
			'Result' => array(
				'dataShow' => $dataShow,
			)
		);
		$this->LoadPage($Value);
	}

	public function PositionInsert()
	{
		$dataInsert = $this->input->post();
		$this->PositionModel->PositionInsert($dataInsert);
		redirect("Position");
	}

	public function PositionUpdate()
	{
		$dataUpdate = $this->input->post();
		$this->PositionModel->PositionUpdate($dataUpdate);
		redirect("Position");
	}

	public function PositionDelete()
	{
		$positionId = $this->uri->segment(3);
		$dataDelete = array(
			'positionId' => $positionId,
		 	'positionStatus' => 2
		);

		$this->PositionModel->PositionDelete($dataDelete);
		redirect("Position");
	}



}
