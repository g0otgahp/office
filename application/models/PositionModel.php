<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PositionModel extends CI_Model {

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

	public function PositionSelect()
	{
		$dataShow = $this->db->where('positionStatus',1)->get('position')->result_array();
		return $dataShow;
	}

	public function PositionInsert($dataInsert)
	{
		$this->db->insert('position',$dataInsert);
	}

	public function PositionUpdate($dataUpdate)
	{
		$this->db->where('positionId',$dataUpdate['positionId'])->update('position',$dataUpdate);
	}

	public function PositionDelete($dataDelete)
	{
		$this->db->where('positionId',$dataDelete['positionId'])->update('position',$dataDelete);
	}



}
