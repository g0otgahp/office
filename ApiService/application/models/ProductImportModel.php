<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductImportModel extends CI_Model {

	public function __construct() {
			parent::__construct();

	}

	public function SelectProfile($profileId)
	{
		$dataProfile = $this->db
		->where('profileStatus',1)
		->where('profileId',$profileId)
		->get('profile')
		->result_array();

		// echo "<pre>";
		// print_r($dataProfile);
		// exit();

		return $dataProfile;
	}



}
