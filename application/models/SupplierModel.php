<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SupplierModel extends CI_Model {

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

	public function SupplierSelect()
	{
		$dataShow = $this->db
		->where('supplierStatus',1)
		->get('supplier')
		->result_array();
		// $this->debug->log($dataShow);
		return $dataShow;

	}

	public function SupplierInsert($dataInsert)
	{
		// $this->debug->log($dataInsert);
		$this->db->insert('supplier',$dataInsert);
	}

	public function SupplierSelectForUpdate($supplierId)
	{
		$dataUpdate = $this->db
		->where('supplierId',$supplierId)
		->get('supplier')->result_array();
		// $this->debug->log($dataShow);
		return $dataUpdate;

	}

	public function SupplierUpdate($dataUpdate)
	{
		// $this->debug->log($dataUpdate);
		$this->db
		->where('supplierId',$dataUpdate['supplierId'])
		->update('supplier',$dataUpdate);
	}

	public function SupplierDelete($dataDelete)
	{
		// $this->debug->log($dataUpdate);
		$this->db
		->where('supplierId',$dataDelete['supplierId'])
		->update('supplier',$dataDelete);
	}

}
