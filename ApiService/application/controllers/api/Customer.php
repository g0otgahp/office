<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';

class Customer extends REST_Controller {

  public function __construct() {
    parent::__construct();
    @session_start();

  }

  public function SelectCustomer_get() {

    $dataCustomer = $this->CustomerModel->SelectCustomer();

    //check if the user data exists
    if(!empty($dataCustomer)){
      //set the response and exit
      $this->response($dataCustomer, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function Provinces_get() {

    $dataProvinces = $this->CustomerModel->SelectProvinces();

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

    $dataIdDistricts = $this->post();

    $dataDistricts = $this->CustomerModel->SelectDistricts($dataIdDistricts['idDistricts']);

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

    $dataIdSubDistricts = $this->post();

    $dataSubDistricts = $this->CustomerModel->SelectSubDistricts($dataIdSubDistricts['idSubDistricts']);

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

    $dataSelectZipcode = $this->post();
    //
    // echo "<pre>";
    // print_r($dataSelectZipcode);
    // exit();

    $dataSelectZipcode = $this->CustomerModel->SelectZipcode($dataSelectZipcode['idZipcode']);

    //check if the user data exists
    if(!empty($dataSelectZipcode)){
      //set the response and exit
      $this->response($dataSelectZipcode, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function CustomerInsert_post() {

    $data = $this->post();

    // $dataInsert = json_decode($data);
    $data['dataInsert']['customerLog'] = "เพิ่มลูกค้า";
    $data['dataInsert']['customerLogName'] = $_SESSION['profileName'];


    $this->CustomerModel->CustomerInsert($data['dataInsert']);

    $this->response(REST_Controller::HTTP_OK);

  }

  public function SelectForUpdate_post() {

    $data = $this->post();

    $dataCustomer = $this->CustomerModel->SelectForUpdate($data['customerId']);

    //check if the user data exists
    if(!empty($dataCustomer)){
      //set the response and exit
      $this->response($dataCustomer, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }

  }

  public function CustomerUpdate_post() {

    $data = $this->post();

    $data['dataUpdate']['customerLog'] = "แก้ไขลูกค้า";
    $data['dataUpdate']['customerLogName'] = $_SESSION['profileName'];

    // echo "<pre>";
    // print_r($data['dataUpdate']);
    // exit();

    $this->CustomerModel->CustomerUpdate($data['dataUpdate']);

    $this->response(REST_Controller::HTTP_OK);


  }

  public function CustomerDelete_post() {

    $data = $this->post();

    $dataDelete = array(
      'customerId' => $data['customerId'],
      'customerStatus' => 2,
      'customerLog' => "ลบลูกค้า",
      'customerLogName' => $_SESSION['profileName'],
    );

    $this->CustomerModel->CustomerDelete($dataDelete);

    $this->response(REST_Controller::HTTP_OK);


  }

}
?>
