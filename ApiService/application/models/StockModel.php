<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StockModel extends CI_Model {

	public function __construct() {
		parent::__construct();

	}

	public function GetStockList($Type)
	{
		$data['stock'] = $this->db
		->order_by('stockDate','DESC')
		->where('stockType',$Type)
		->get('stock')
		->result_array();

		$i=0;
		foreach ($data['stock'] as $row) {
			$stock_order = $this->db
			->where('stockorderStockId',$row['stockId'])
			->select('SUM(stockorderPrice),SUM(stockorderQty)')
			->get('stock_order')
			->result_array();

			$data['stock'][$i]['SUMPrice'] = $stock_order[0]['SUM(stockorderPrice)'];
			$data['stock'][$i]['SUMQty'] = $stock_order[0]['SUM(stockorderQty)'];
			$i++;
		}
		return $data;
	}

	public function NumStock()
	{
		$data = $this->db
		->get('stock')
		->num_rows();
		return $data;
	}

	public function SaveStock($input)
	{
		if (empty($input['stockId'])) {
			$this->db->insert('stock',$input);
			return $this->db->insert_id();
		} else {
			$this->db->update('stock',$input);
			return $input['stockId'];
		}
	}

	public function SaveStockOrder($input)
	{
		$this->db->insert_batch('stock_order', $input);
	}
}
