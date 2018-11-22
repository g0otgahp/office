<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SupplierModel extends CI_Model {

	public function __construct() {
			parent::__construct();

	}

	public function SelectSupplier()
	{
		$dataSupplier = $this->db->where('supplierStatus',1)->get('supplier')->result_array();

		return $dataSupplier;
	}


	public function SelectProvinces()
	{
		$dataProvinces = $this->db->get('provinces')->result_array();

		return $dataProvinces;
	}

	public function SelectDistricts($idProvinces)
	{
		$dataDistricts = $this->db
		->where('province_id',$idProvinces)
		->get('districts')->result_array();

		return $dataDistricts;
	}

	public function SelectSubDistricts($idDistricts)
	{
		$dataSubDistricts = $this->db
		->where('district_id',$idDistricts)
		->get('subdistricts')->result_array();

		return $dataSubDistricts;
	}

	public function SelectZipcode($idSubDistricts)
	{
		$dataZipcode = $this->db
		->where('id',$idSubDistricts)
		->get('subdistricts')->result_array();

		return $dataZipcode;
	}

	public function SupplierInsert($dataInsert)
	{
		$this->db->insert('supplier',$dataInsert);

	}

	public function SelectForUpdate($supplierId)
	{

		$dataSupplier = $this->db
		->where('supplierStatus',1)
		->where('supplierId',$supplierId)
		->get('supplier')
		->result_array();

		return $dataSupplier;

	}

	public function SupplierUpdate($dataUpdate)
	{
		//
		// echo "<pre>";
		// print_r($dataUpdate);
		// exit();

		$this->db
		->where('supplierId',$dataUpdate["supplierId"])
		->update('supplier',$dataUpdate);

	}

	public function SupplierDelete($dataDelete)
	{
		$this->db
		->where('supplierId',$dataDelete["supplierId"])
		->update('supplier',$dataDelete);

	}

}
