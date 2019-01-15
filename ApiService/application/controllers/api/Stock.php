<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';

class Stock extends REST_Controller {
  public function __construct() {
    parent::__construct();
    @session_start();
  }

  public function StockList_post(){
    $Type = $this->post();
    $data = $this->StockModel->GetStockList($Type['Type']);
    //check if the user data exists
    if(!empty($data)){
      //set the response and exit
      $this->response($data, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'ไม่มีข้อมูล'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function SaveStock_post(){

    $data = $this->post('data');
    $NumStock = $this->StockModel->NumStock();
    $StockNo = "ST".sprintf("%05d",($NumStock+1));
    $stockTable = array(
      'stockDate' => date('Y-m-d h:i:sa'),
      'stockNo' => $StockNo,
      'stockType' => $data['Document'][0]['StockType'],
      'stockNote' => $data['Document'][0]['stockNote'],
      'stockRef' => $data['Document'][0]['stockRef'],
      'stockRemark1' => $data['Document'][0]['stockRemark1'],
      'stockRemark2' => $data['Document'][0]['stockRemark2'],
      'stockRemark3' => $data['Document'][0]['stockRemark3'],
      'stockTel' => $data['Profile'][0]['profilePhone'],
      'stockEmail' => $data['Profile'][0]['profileEmail'],
      'stockReciveName' => $data['Profile'][0]['stockReciveName'],
      'stockOfferId' => $data['Profile'][0]['profileId'],
    );
    $StockId = $this->StockModel->SaveStock($stockTable);

    $OrderTable = [];
    foreach ($data['SelectProduct'] as $item) {
      $OrderLoop = array(
        'stockorderProduct' => $item['productId'],
        'stockorderName' => $item['productName'],
        'stockorderDetail' => $item['productDetail'],
        'stockorderQty' => $item['productQty'],
        'stockorderUnit' => $item['productUnit'],
        'stockorderPrice' => $item['productRetail'],
        'stockorderStockId' => $StockId,
      );
      array_push($OrderTable,$OrderLoop);
    }
    $this->StockModel->SaveStockOrder($OrderTable);

    $this->response([
      'status' => FALSE,
      'message' => 'ไม่มีข้อมูล'
    ], REST_Controller::HTTP_OK);
  }
}
?>
