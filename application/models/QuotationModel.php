<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuotationModel extends CI_Model {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/

	public function LoadQuotation($id)
	{
		$data = $this->db
		->order_by('quoStatus','DESC')
		->order_by('quoDate','DESC')
		->where('quoStatus != 3')
		->where('quoOfferId',$id)
		->get('quotation')
		->result_array();
		return $data;

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
		->get('quotation_order')
		->result_array();
		return $data;
	}


	public function UpdateQuotation($input)
	{
		$this->db->where('quoId',$input['quoId'])->update('quotation',$input);
	}

}
