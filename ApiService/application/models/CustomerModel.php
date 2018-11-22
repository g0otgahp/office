<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerModel extends CI_Model {

	public function __construct() {
			parent::__construct();

	}

	public function SelectCustomer()
	{
		$dataCustomer = $this->db->where('customerStatus',1)->get('customer')->result_array();

		return $dataCustomer;
	}


	public function SelectProvinces()
	{
		$dataDistricts = $this->db->get('provinces')->result_array();

		return $dataDistricts;
	}

	public function SelectDistricts($dataIdDistricts)
	{
		$dataSubDistricts = $this->db
		->where('province_id',$dataIdDistricts)
		->get('districts')->result_array();

		return $dataSubDistricts;
	}

	public function SelectSubDistricts($dataIdSubDistricts)
	{
		$dataSubDistricts = $this->db
		->where('district_id',$dataIdSubDistricts)
		->get('subdistricts')->result_array();

		return $dataSubDistricts;
	}

	public function SelectZipcode($dataSelectZipcode)
	{
		$dataSelectZipcode = $this->db
		->where('id',$dataSelectZipcode)
		->get('subdistricts')->result_array();

		return $dataSelectZipcode;
	}

	public function CustomerInsert($dataInsert)
	{
		$this->db->insert('customer',$dataInsert);

	}

	public function SelectForUpdate($customerId)
	{

		$dataCustomer = $this->db
		->where('customerStatus',1)
		->where('customerId',$customerId)
		->get('customer')
		->result_array();

		return $dataCustomer;

	}

	public function CustomerUpdate($dataUpdate)
	{

		$this->db
		->where('customerId',$dataUpdate["customerId"])
		->update('customer',$dataUpdate);

	}

	public function CustomerDelete($dataDelete)
	{
		$this->db
		->where('customerId',$dataDelete["customerId"])
		->update('customer',$dataDelete);

	}

}
