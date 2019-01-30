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

  public function employee_get() {

    $data = $this->ServiceModel->GetEmployee();


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
      'quoCompany' => $data['Forms']['SelectCustomer']['customerCompany'],
      'quoCustomerId' => $data['Forms']['SelectCustomer']['customerId'],
      'quoTel' => $data['Forms']['SelectCustomer']['customerMainPhone'],
      'quoEmail' => $data['Forms']['SelectCustomer']['customerEmail'],
      'quoReachDay' => $data['Forms']['SelectCustomer']['quoReachDay'],
      'quoPayments' => $data['Forms']['SelectCustomer']['quoPayments'],
      'quoTransportDay' => $data['Forms']['SelectCustomer']['quoTransportDay'],
      'quoOfferId' => $data['sessionId'],
    );

    $DateNow = Date('Y-m-d G:i:s');
    $subDate = substr($DateNow, 0,10);
    $DateStart = $subDate.' 00:00:00';
    $DateTo = $subDate.' 23:59:59';
    $CountID = $this->db->where('quoDate >=',$DateStart)->where('quoDate <=',$DateTo)->where('quoStatus !=',3)->get('quotation')->num_rows();
    $QOcode = "QP".substr($DateNow, 2,2).substr($DateNow, 5,2).substr($DateNow, 8,2).sprintf("-%02d",($CountID+1));
    $quotation['quoNo'] = $QOcode;

    if (isset($data['Forms']['SelectCustomer']['quoProject'])) {
      $quotation['quoProject'] = $data['Forms']['SelectCustomer']['quoProject'];
    }

    if (isset($data['Forms']['SelectCustomer']['quoRemark1'])) {
      $quotation['quoRemark1'] = $data['Forms']['SelectCustomer']['quoRemark1'];
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
      } else {
        $loop['orderDetail'] = "";
      }
      if (isset($value['productId'])) {
        $loop['orderProductId'] = $value['productId'];
      } else {
        $loop['orderProductId'] = 1;
      }
      if (isset($value['productUnit'])) {
        $loop['orderUnit'] = $value['productUnit'];
      } else {
        $loop['orderUnit'] = "";
      }
      if (isset($value['productDiscount'])) {
        $loop['orderDiscount'] = $value['productDiscount'];
      } else {
        $loop['orderDiscount'] = "";
      }
      if (isset($value['productRetail'])) {
        $loop['orderPrice'] = $value['productRetail'];
      } else {
        $loop['orderPrice'] = "";
      }
      if (isset($value['productQty'])) {
        $loop['orderQty'] = $value['productQty'];
      } else {
        $loop['orderQty'] = "";
      }
      if (isset($value['productName'])) {
        $loop['orderName'] = $value['productName'];
      } else {
        $loop['orderName'] = "";
      }
      array_push($Product,$loop);
    }

    // echo "<pre>";
    // print_r($Product);
    // exit();

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
