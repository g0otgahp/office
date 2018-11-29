<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {

	public function __construct() {
			parent::__construct();

	}

	public function SelectProduct()
	{
		$dataProduct = $this->db
		->where('productStatus',1)
		->join('product_brand','product_brand.product_brandId = product.productBrand')
		->join('product_category','product_category.product_categoryId = product.productCategory')
		->get('product')
		->result_array();

		// echo "<pre>";
		// print_r($dataProduct);
		// exit();

		return $dataProduct;
	}

	public function ProductInsert($dataInsert)
	{
		$this->db->insert('product',$dataInsert);
	}

	public function SelectForUpdate($dataSelect)
	{
		$dataProduct = $this->db
		->where('productStatus	',1)
		->where('productId	',$dataSelect['productId'])
		->join('product_brand','product_brand.product_brandId = product.productBrand')
		->join('product_category','product_category.product_categoryId = product.productCategory')
		->get('product')
		->result_array();
		//
		// echo "<pre>";
		// print_r($dataProduct);
		// exit();

		return $dataProduct;
	}

	public function ProductUpdate($dataUpdate)
	{
		$this->db->where('productId',$dataUpdate['productId'])->update('product',$dataUpdate);
	}

	public function ProductDelete($dataDelete)
	{
		$this->db->where('productId',$dataDelete['productId'])->update('product',$dataDelete);
	}

}
