<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceModel extends CI_Model {

	public function __construct() {
		parent::__construct();

	}

	public function GetCustomer()
	{
		$data = $this->db
		->where('customerStatus',1)
		->get('customer')
		->result_array();

		return $data;
	}

	public function GetEmployee()
	{
		$data = $this->db
		->where('profileStatus',1)
		->join('position','position.positionId = profile.positionId')
		->get('profile')
		->result_array();

		return $data;
	}

	public function GetProduct()
	{
		$dataShow = $this->db
		->where('productStatus',1)
		->join('product_brand','product_brand.product_brandId = product.productBrand')
		->join('product_category','product_category.product_categoryId = product.productCategory')
		->get('product')
		->result_array();
		// $this->debug->log($dataShow);
		return $dataShow;
	}

	public function SaveQuotation($input)
	{
		if (empty($input['quoId'])) {
			$this->db->insert('quotation',$input);
			return $this->db->insert_id();
		} else {
			$this->db->where('quoId',$input['quoId'])->update('quotation',$input);
			return $input['quoId'];
		}
	}

	public function SaveQuotationProduct($input)
	{
	 $this->db->insert_batch('quotation_order', $input);
	}

	public function SelectQuotation($id){
		$data['quotation'] = $this->db
		->where('quoId',$id)
		->get('quotation')
		->result_array();

		$data['customer'] = $this->db
		->where('customerId',$data['quotation'][0]['quoCustomerId'])
		->get('customer')
		->result_array();

		$data['employee'] = $this->db
		->where('profileId',$data['quotation'][0]['quoOfferId'])
		->get('profile')
		->result_array();

		$data['quotation_order'] = $this->db
		->where('orderQuotationId',$id)
		->join('product','product.productId = quotation_order.orderProductId')
		->get('quotation_order')
		->result_array();

		$i = 0;
		foreach ($data['quotation_order'] as $row) {
			$data['quotation_order'][$i]['productName'] = $row['orderName'];
			$data['quotation_order'][$i]['productQty'] = $row['orderQty'];
			$data['quotation_order'][$i]['productUnit'] = $row['orderUnit'];
			$data['quotation_order'][$i]['productRetail'] = $row['orderPrice'];
			$data['quotation_order'][$i]['productDiscount'] = $row['orderDiscount'];
		$i++;
		}
		return $data;
	}
}
