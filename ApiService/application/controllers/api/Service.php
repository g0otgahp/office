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

}
?>
