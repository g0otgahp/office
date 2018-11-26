<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';

class ProductCategory extends REST_Controller {

  public function __construct() {
    parent::__construct();
    @session_start();

  }

  public function SelectProductCategory_get() {

    $dataProductCategory = $this->ProductCategoryModel->SelectProductCategory();

    //check if the user data exists
    if(!empty($dataProductCategory)){
      //set the response and exit
      $this->response($dataProductCategory, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function ProductCategoryInsert_post(){

    $data = $this->post();
    $data['dataInsert']['product_categoryLog'] = "เพิ่มประเภทสินค้า";
    $data['dataInsert']['product_categoryLogName'] = $_SESSION['profileName'];

    // echo "<pre>";
    // print_r($data['dataInsert']);
    // exit();

    $this->ProductCategoryModel->ProductCategoryInsert($data['dataInsert']);
    $this->response(REST_Controller::HTTP_OK);

  }

  public function ProductCategoryUpdate_post(){

    $data = $this->post();
    $data['dataUpdate']['product_categoryLog'] = "แก้ไขประเภทสินค้า";
    $data['dataUpdate']['product_categoryLogName'] = $_SESSION['profileName'];

    // echo "<pre>";
    // print_r($data['dataUpdate']);
    // exit();

    $this->ProductCategoryModel->ProductCategoryUpdate($data['dataUpdate']);
    $this->response(REST_Controller::HTTP_OK);

  }

  public function ProductCategoryDelete_post(){

    $data = $this->post();
    $data['dataDelete']['product_categoryStatus'] = 2;
    $data['dataDelete']['product_categoryLog'] = "ลบประเภทสินค้า";
    $data['dataDelete']['product_categoryLogName'] = $_SESSION['profileName'];

    // echo "<pre>";
    // print_r($data['dataUpdate']);
    // exit();

    $this->ProductCategoryModel->ProductCategoryDelete($data['dataDelete']);
    $this->response(REST_Controller::HTTP_OK);

  }

}
?>
