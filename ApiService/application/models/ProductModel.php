<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {

	public function __construct() {
			parent::__construct();

	}

	public function SelectProduct()
	{
		$dataProduct = $this->db
		->where('productStatus	',1)
		->join('product_brand','product_brand.product_brandId = product.productBrand')
		->join('product_category','product_category.product_categoryId = product.productCategory')
		->get('product')
		->result_array();
		return $dataProduct;
	}

	public function ProductInsert($dataInsert)
	{
		$this->db->insert('product',$dataInsert);
	}

}
