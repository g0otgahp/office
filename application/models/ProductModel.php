<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {

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

	public function ProductSelect()
	{
		$dataShow = $this->db
		->where('productStatus',1)
		->get('product')
		->result_array();
		// $this->debug->log($dataShow);
		return $dataShow;

	}

	public function ProductInsert($dataInsert)
	{
		// $this->debug->log($dataInsert);
		$this->db->insert('product',$dataInsert);
	}

	public function ProductSelectForUpdate($productId)
	{
		$dataShow = $this->db
		->where('productId',$productId)
		->get('product')->result_array();
		// $this->debug->log($dataShow);
		return $dataShow;

	}

	public function ProductUpdate($dataUpdate)
	{
		// $this->debug->log($dataUpdate);

		$this->db
		->where('productId',$dataUpdate['productId'])
		->update('product',$dataUpdate);
	}

	public function ProductDelete($dataDelete)
	{
		// $this->debug->log($dataUpdate);
		
		$this->db
		->where('productId',$dataDelete['productId'])
		->update('product',$dataDelete);
	}

}
