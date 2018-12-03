<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';

class Employee extends REST_Controller {

  public function __construct() {
    parent::__construct();
    @session_start();

  }


  public function SelectEmployee_get() {

    $dataEmployee = $this->EmployeeModel->SelectEmployee();

    //check if the user data exists
    if(!empty($dataEmployee)){
      //set the response and exit
      $this->response($dataEmployee, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function SelectPosition_get() {

    $dataPosition = $this->EmployeeModel->SelectPosition();

    if(!empty($dataPosition)){
        $this->response($dataPosition, REST_Controller::HTTP_OK);
    }else{
      $this->response([
        'status' => FALSE,
        'message' => 'Data Not Found.'
      ],REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function EmployeeInsert_post() {

    $data = $this->post();
    $data['dataInsert']['profileLog'] = "เพิ่มพนักงาน";
    $data['dataInsert']['profileLogName'] = $_SESSION['profileName'];

    // echo "<pre>";
    // print_r($data);
    // exit();

    $this->EmployeeModel->EmployeeInsert($data['dataInsert']);

    $this->response(REST_Controller::HTTP_OK);

  }

  public function SelectForUpdate_post() {

    $data = $this->post();

    $dataEmployee = $this->EmployeeModel->SelectForUpdate($data['profileId']);

    //check if the user data exists
    if(!empty($dataEmployee)){
      //set the response and exit
      $this->response($dataEmployee, REST_Controller::HTTP_OK);
    }else{
      //set the response and exit
      $this->response([
        'status' => FALSE,
        'message' => 'No user were found.'
      ], REST_Controller::HTTP_NOT_FOUND);
    }

  }

  public function EmployeeUpdate_post() {

    $data = $this->post();
    // $data['dataInsert']['profileLog'] = "เพิ่มสินค้า";
    // $data['dataInsert']['profileLogName'] = $_SESSION['profileName'];
    $dataUpdate = array(
      'profileId' => $data['dataForUpdate']['profileId'],
      'profilePrefix' => $data['dataForUpdate']['profilePrefix'],
      'profileName' => $data['dataForUpdate']['profileName'],
      'profileSurname' => $data['dataForUpdate']['profileSurname'],
      'profileNickname' => $data['dataForUpdate']['profileNickname'],
      'profileSex' => $data['dataForUpdate']['profileSex'],
      'profileCitizenId' => $data['dataForUpdate']['profileCitizenId'],
      'profileEmail' => $data['dataForUpdate']['profileEmail'],
      'profilePhone' => $data['dataForUpdate']['profilePhone'],
      'profileAddress' => $data['dataForUpdate']['profileAddress'],
      'positionId' => $data['dataForUpdate']['positionId'],
      'profileLog' => "แก้ไขพนักงาน",
      'profileLogName' => $_SESSION['profileName'],
    );

    // echo "<pre>";
    // print_r($dataUpdate);
    // exit();

    $this->EmployeeModel->EmployeeUpdate($dataUpdate);

    $this->response(REST_Controller::HTTP_OK);

  }

  public function EmployeeDelete_post() {

    $data = $this->post();

    $dataDelete = array(
      'profileId' => $data['profileId'],
      'profileStatus' => 2,
      'profileLog' => "ลบพนักงาน",
      'profileLogName' => $_SESSION['profileName'],
    );

    // echo "<pre>";
    // print_r($dataDelete);
    // exit();

    $this->EmployeeModel->EmployeeDelete($dataDelete);

    $this->response(REST_Controller::HTTP_OK);

  }


}
?>
