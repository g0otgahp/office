<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductBrandModel extends CI_Model {

	public function __construct() {
			parent::__construct();

	}

	public function SelectProductBrand()
	{
		$dataProductBrand = $this->db->where('product_brandStatus',1)->get('product_brand')->result_array();
		return $dataProductBrand;
	}

	public function ProductBrandInsert($dataInsert)
	{
		$this->db->insert('product_brand',$dataInsert);
	}

	public function ProductBrandUpdate($dataUpdate)
	{
		$this->db->where('product_brandId',$dataUpdate['product_brandId'])->update('product_brand',$dataUpdate);
	}

	public function ProductBrandDelete($dataDelete)
	{
		$this->db->where('product_brandId',$dataDelete['product_brandId'])->update('product_brand',$dataDelete);
	}


}
