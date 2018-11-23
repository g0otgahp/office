<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';

class Service extends REST_Controller {

  public function __construct() {
    parent::__construct();

  }

  public function customer_get() {

    $data = $this->ServiceModel->GetCustomer();


    //check if the user data exists
    if(!empty($data)){
      //set the response and exit
      $this->response($data, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function product_get() {

    $data = $this->ServiceModel->GetProduct();


    //check if the user data exists
    if(!empty($data)){
      //set the response and exit
      $this->response($data, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function quotationSubmit_post() {
    $data = $this->post();

    $quotation = array(
      'quoNo' => $data['Forms']['SelectCustomer']['quoNo'],
      'quoCompany' => $data['Forms']['SelectCustomer']['customerCompany'],
      'quoCustomerId' => $data['Forms']['SelectCustomer']['customerId'],
      'quoTel' => $data['Forms']['SelectCustomer']['customerMainPhone'],
      'quoEmail' => $data['Forms']['SelectCustomer']['customerEmail'],
      'quoProject' => $data['Forms']['SelectCustomer']['quoProject'],
      'quoReachDay' => $data['Forms']['SelectCustomer']['quoReachDay'],
      'quoPayments' => $data['Forms']['SelectCustomer']['quoPayments'],
      'quoTransportDay' => $data['Forms']['SelectCustomer']['quoTransportDay'],
      'quoRemark1' => $data['Forms']['SelectCustomer']['quoRemark1'],
      'quoRemark2' => $data['Forms']['SelectCustomer']['quoRemark2'],
      'quoRemark3' => $data['Forms']['SelectCustomer']['quoRemark3'],
      'quoNote' => $data['Forms']['SelectCustomer']['quoNote'],
      'quoOfferId' => $data['sessionId'],
    );

    if (!empty($data['Forms']['SelectCustomer']['quoId'])) {
      $quotation['quoId'] = $data['Forms']['SelectCustomer']['quoId'];
    }

    $QuoID = $this->ServiceModel->SaveQuotation($quotation);

    $Product = [];
    foreach ($data['Forms']['SelectProduct'] as $value) {
      $loop = array(
        'orderProductId' => $value['productId'],
        'orderName' => $value['productName'],
        'orderDetail' => $value['productDetail'],
        'orderQty' => $value['productQty'],
        'orderUnit' => "ชิ้น",
        'orderPrice' => $value['productRetail'],
        'orderDiscount' => $value['productDiscount'],
        'orderQuotationId' => $QuoID,
      );
      array_push($Product,$loop);
    }

    $this->ServiceModel->SaveQuotationProduct($Product);


    //check if the user data exists
    if(!empty($data)){
      //set the response and exit
      $this->response($data, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

}
?>
