<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerModel extends CI_Model {

	public function __construct() {
			parent::__construct();

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

	public function CustomerInsert($dataInsert)
	{
		$this->db->insert('customer',$dataInsert);

	}

}
