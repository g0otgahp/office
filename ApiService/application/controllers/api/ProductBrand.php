<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';

class ProductBrand extends REST_Controller {

  public function __construct() {
    parent::__construct();
    @session_start();

  }

  public function SelectProductBrand_get() {

    $dataProductBrand = $this->ProductBrandModel->SelectProductBrand();

    //check if the user data exists
    if(!empty($dataProductBrand)){
      //set the response and exit
      $this->response($dataProductBrand, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function ProductBrandInsert_post(){

    $data = $this->post();
    $data['dataInsert']['product_brandLog'] = "เพิ่มยี่ห้อ";
    $data['dataInsert']['product_brandLogName'] = $_SESSION['profileName'];

    // echo "<pre>";
    // print_r($data['dataInsert']);
    // exit();

    $this->ProductBrandModel->ProductBrandInsert($data['dataInsert']);
    $this->response(REST_Controller::HTTP_OK);

  }

  public function ProductBrandUpdate_post(){

    $data = $this->post();
    $data['dataUpdate']['product_brandLog'] = "แก้ไขยี่ห้อ";
    $data['dataUpdate']['product_brandLogName'] = $_SESSION['profileName'];

    // echo "<pre>";
    // print_r($data['dataUpdate']);
    // exit();

    $this->ProductBrandModel->ProductBrandUpdate($data['dataUpdate']);
    $this->response(REST_Controller::HTTP_OK);

  }

  public function ProductBrandDelete_post(){

    $data = $this->post();
    $data['dataDelete']['product_brandStatus'] = 2;
    $data['dataDelete']['product_brandLog'] = "ลบยี่ห้อสินค้า";
    $data['dataDelete']['product_brandLogName'] = $_SESSION['profileName'];

    // echo "<pre>";
    // print_r($data['dataUpdate']);
    // exit();

    $this->ProductBrandModel->ProductBrandDelete($data['dataDelete']);
    $this->response(REST_Controller::HTTP_OK);

  }

}
?>
