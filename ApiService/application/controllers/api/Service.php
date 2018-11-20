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
      'quoNo' => $data['SelectCustomer']['quoNo'],
      'quoCompany' => $data['SelectCustomer']['customerCompany'],
      'quoCustomerId' => $data['SelectCustomer']['customerId'],
      'quoTel' => $data['SelectCustomer']['customerMainPhone'],
      'quoEmail' => $data['SelectCustomer']['customerEmail'],
      'quoProject' => $data['SelectCustomer']['quoProject'],
      'quoReachDay' => $data['SelectCustomer']['quoReachDay'],
      'quoPayments' => $data['SelectCustomer']['quoPayments'],
      'quoTransportDay' => $data['SelectCustomer']['quoTransportDay'],
      'quoOfferId' => 1,
    );

    if (!empty($data['SelectCustomer']['quoId'])) {
      $quotation['quoId'] = $data['SelectCustomer']['quoId'];
    }

    $QuoID = $this->ServiceModel->SaveQuotation($quotation);

    $Product = [];
    foreach ($data['SelectProduct'] as $value) {
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
