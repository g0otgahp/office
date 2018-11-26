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

	public function ProductCategoryModal()
	{
		$this->load->view('Modal/ProductCategoryModal');
	}

	public function ProductBrandModal()
	{
		$this->load->view('Modal/ProductBrandModal');
	}

	public function BrandModal()
	{
		$this->load->view('Modal/BrandModal');
	}

	public function CategoryModal()
	{
		$this->load->view('Modal/CategoryModal');
	}


}
