<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerModel extends CI_Model {

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

	public function CustomerSelect()
	{
		$dataShow = $this->db
		->where('customerStatus',1)
		->get('customer')
		->result_array();
		// $this->debug->log($dataShow);
		return $dataShow;

	}

	// public function CustomerInsert($dataInsert)
	// {
	// 	// $this->debug->log($dataInsert);
	// 	$this->db->insert('customer',$dataInsert);
	// }

	public function CustomerSelectForUpdate($customerId)
	{
		$dataShow = $this->db
		->where('customerId',$customerId)
		->get('customer')->result_array();
		// $this->debug->log($dataShow);
		return $dataShow;

	}

	public function CustomerUpdate($dataUpdate)
	{
		// $this->debug->log($dataUpdate);
		$this->db
		->where('customerId',$dataUpdate['customerId'])
		->update('customer',$dataUpdate);
	}

	public function CustomerDelete($dataDelete)
	{
		// $this->debug->log($dataUpdate);
		$this->db
		->where('customerId',$dataDelete['customerId'])
		->update('customer',$dataDelete);
	}

}
