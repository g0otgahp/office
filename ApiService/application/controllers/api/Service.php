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
      'quoReachDay' => $data['Forms']['SelectCustomer']['quoReachDay'],
      'quoPayments' => $data['Forms']['SelectCustomer']['quoPayments'],
      'quoTransportDay' => $data['Forms']['SelectCustomer']['quoTransportDay'],
      'quoOfferId' => $data['sessionId'],
    );

    if (isset($data['Forms']['SelectCustomer']['quoRemark1'])) {
      $quotation['quoRemark1'] = $data['Forms']['SelectCustomer']['quoRemark1'];
    }

    if (isset($data['Forms']['SelectCustomer']['quoProject'])) {
      $quotation['quoRemark1'] = $data['Forms']['SelectCustomer']['quoProject'];
    }


    if (isset($data['Forms']['SelectCustomer']['quoRemark2'])) {
      $quotation['quoRemark2'] = $data['Forms']['SelectCustomer']['quoRemark2'];
    }

    if (isset($data['Forms']['SelectCustomer']['quoRemark3'])) {
      $quotation['quoRemark3'] = $data['Forms']['SelectCustomer']['quoRemark3'];
    }

    if (isset($data['Forms']['SelectCustomer']['quoNote'])) {
      $quotation['quoNote'] = $data['Forms']['SelectCustomer']['quoNote'];
    }

    if (!empty($data['Forms']['SelectCustomer']['quoId'])) {
      $quotation['quoId'] = $data['Forms']['SelectCustomer']['quoId'];
    }

    $QuoID = $this->ServiceModel->SaveQuotation($quotation);

    $Product = [];
    foreach ($data['Forms']['SelectProduct'] as $value) {
      $loop = [];
      $loop['orderQuotationId'] = $QuoID;

      if (isset($value['productDetail'])) {
        $loop['orderDetail'] = $value['productDetail'];
      }

      if (isset($value['productId'])) {
        $loop['orderProductId'] = $value['productId'];
      }

      if (isset($value['productUnit'])) {
        $loop['orderUnit'] = $value['productUnit'];
      }

      if (isset($value['productDiscount'])) {
        $loop['orderDiscount'] = $value['productDiscount'];
      }

      if (isset($value['productRetail'])) {
        $loop['orderPrice'] = $value['productRetail'];
      }

      if (isset($value['productQty'])) {
        $loop['orderQty'] = $value['productQty'];
      }

      if (isset($value['productName'])) {
        $loop['orderName'] = $value['productName'];
      }

      array_push($Product,$loop);
    }

    echo "<pre>";
    print_r($Product);
    exit();

    // $this->ServiceModel->SaveQuotationProduct($Product);


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
