<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';

class Product extends REST_Controller {

  public function __construct() {
    parent::__construct();
    @session_start();

  }

  public function SelectProduct_get() {

    $dataProduct = $this->ProductModel->SelectProduct();

    //check if the user data exists
    if(!empty($dataProduct)){
      //set the response and exit
      $this->response($dataProduct, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function ProductInsert_post(){

    $data = $this->post();
    $data['dataInsert']['productLog'] = "เพิ่มสินค้า";
    $data['dataInsert']['productLogName'] = $_SESSION['profileName'];

    // echo "<pre>";
    // print_r($data['dataInsert']);
    // exit();

    $this->ProductModel->ProductInsert($data['dataInsert']);
    $this->response(REST_Controller::HTTP_OK);

  }

}
?>
