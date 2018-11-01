<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modal extends CI_Controller {


	public function CustomerModal()
	{
		$this->load->view('Modal/CustomerModal');
	}

	public function ProductModal()
	{
		$this->load->view('Modal/ProductModal');
	}


}
