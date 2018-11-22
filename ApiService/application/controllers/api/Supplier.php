<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';

class Supplier extends REST_Controller {

  public function __construct() {
    parent::__construct();
    @session_start();

  }

  public function SelectSupplier_get() {

    $dataSupplier = $this->SupplierModel->SelectSupplier();

    //check if the user data exists
    if(!empty($dataSupplier)){
      //set the response and exit
      $this->response($dataSupplier, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function Provinces_get() {

    $dataProvinces = $this->SupplierModel->SelectProvinces();

    //check if the user data exists
    if(!empty($dataProvinces)){
      //set the response and exit
      $this->response($dataProvinces, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function Districts_post() {

    $idProvinces = $this->post();

    $dataDistricts = $this->SupplierModel->SelectDistricts($idProvinces['idProvinces']);

    //check if the user data exists
    if(!empty($dataDistricts)){
      //set the response and exit
      $this->response($dataDistricts, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function Subdistricts_post() {

    $idDistricts = $this->post();

    $dataSubDistricts = $this->SupplierModel->SelectSubDistricts($idDistricts['idDistricts']);

    //check if the user data exists
    if(!empty($dataSubDistricts)){
      //set the response and exit
      $this->response($dataSubDistricts, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function Zipcode_post() {

    $idSubDistricts = $this->post();
    //
    // echo "<pre>";
    // print_r($dataSelectZipcode);
    // exit();

    $dataZipcode = $this->SupplierModel->SelectZipcode($idSubDistricts['idSubDistricts']);

    //check if the user data exists
    if(!empty($dataZipcode)){
      //set the response and exit
      $this->response($dataZipcode, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function SupplierInsert_post() {

    $data = $this->post();

    // $dataInsert = json_decode($data);
    $data['dataInsert']['supplierLog'] = "เพิ่มผู้ผลิต";
    $data['dataInsert']['supplierLogName'] = $_SESSION['profileName'];

    // echo "<pre>";
    // print_r($data['dataInsert']);
    // exit();


    $this->SupplierModel->SupplierInsert($data['dataInsert']);

    $this->response(REST_Controller::HTTP_OK);

  }

  public function SelectForUpdate_post() {

    $data = $this->post();

    $dataSupplier = $this->SupplierModel->SelectForUpdate($data['supplierId']);

    //check if the user data exists
    if(!empty($dataSupplier)){
      //set the response and exit
      $this->response($dataSupplier, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }

  }

  public function SupplierUpdate_post() {

    $data = $this->post();

    $data['dataUpdate']['supplierLog'] = "แก้ไขผู้ผลิต";
    $data['dataUpdate']['supplierLogName'] = $_SESSION['profileName'];

    // echo "<pre>";
    // print_r($data['dataUpdate']);
    // exit();

    $this->SupplierModel->SupplierUpdate($data['dataUpdate']);

    $this->response(REST_Controller::HTTP_OK);


  }

  public function SupplierDelete_post() {

    $data = $this->post();

    $dataDelete = array(
      'supplierId' => $data['supplierId'],
      'supplierStatus' => 2,
      'supplierLog' => "ลบผู้ผลิต",
      'supplierLogName' => $_SESSION['profileName'],
    );

    $this->SupplierModel->SupplierDelete($dataDelete);

    $this->response(REST_Controller::HTTP_OK);


  }

}
?>
