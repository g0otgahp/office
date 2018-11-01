<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceModel extends CI_Model {

	public function __construct() {
			parent::__construct();

	}

	public function GetCustomer()
	{
		$data = $this->db
    ->where('customerStatus',1)
    ->get('customer')
    ->result_array();

		return $data;
	}

	public function GetProduct()
{
	$dataShow = $this->db
	->where('productStatus',1)
	->get('product')
	->result_array();
	// $this->debug->log($dataShow);
	return $dataShow;

}

}
