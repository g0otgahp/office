<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductCategoryModel extends CI_Model {

	public function __construct() {
			parent::__construct();

	}

	public function SelectProductCategory()
	{
		$dataProductCategory = $this->db->where('product_categoryStatus',1)->get('product_category')->result_array();
		return $dataProductCategory;
	}

	public function ProductCategoryInsert($dataInsert)
	{
		$this->db->insert('product_category',$dataInsert);
	}

	public function ProductCategoryUpdate($dataUpdate)
	{
		$this->db->where('product_categoryId',$dataUpdate['product_categoryId'])->update('product_category',$dataUpdate);
	}

	public function ProductCategoryDelete($dataDelete)
	{
		$this->db->where('product_categoryId',$dataDelete['product_categoryId'])->update('product_category',$dataDelete);
	}


}
