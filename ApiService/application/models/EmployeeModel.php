
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeModel extends CI_Model {

	public function __construct() {
			parent::__construct();

	}

	public function SelectEmployee() {

		$dataEmployee = $this->db
		->join('login','login.profileId = profile.profileId')
		->join('position','position.positionId = profile.positionId')
		->get('profile')
		->result_array();

		return $dataEmployee;

	}

	public function SelectPosition() {

		$dataPosition = $this->db
		->where('positionStatus',1)
		->get('position')
		->result_array();

		return $dataPosition;

	}

	public function EmployeeInsert($dataInsert)
	{
		$profile = array(
			'profilePrefix' => $dataInsert['profilePrefix'],
			'profileName' => $dataInsert['profileName'],
			'profileSurname' => $dataInsert['profileSurname'],
			'profileNickname' => $dataInsert['profileNickname'],
			'profileSex' => $dataInsert['profileSex'],
			'profileCitizenId' => $dataInsert['profileCitizenId'],
			'profileEmail' => $dataInsert['profileEmail'],
			'profilePhone' => $dataInsert['profilePhone'],
			// 'profileImage' => $dataInsert['profileImage'],
			'profileAddress' => $dataInsert['profileAddress'],
			'positionId' => $dataInsert['positionId'],
			'profileLog' => "เพิ่มพนักงาน",
			'profileLogName' => $_SESSION['profileName'],
		);

		// echo "<pre>";
		// print_r($profile);
		// exit();

		$this->db->insert('profile',$profile);
		$id = $this->db->insert_id();

		$login = array(
			'loginUsername' => $dataInsert['loginUsername'],
			'loginPassword' => md5($dataInsert['loginPassword']),
			'profileId' => $id,
			'loginLog' => "เพิ่มพนักงาน",
			'loginLogName' => $_SESSION['profileName'],
		);

		// echo "<pre>";
		// print_r($login);
		// exit();

		$this->db->insert('login',$login);

	}

	public function SelectForUpdate($profileId) {

		$dataEmployee = $this->db
		->where('profile.profileId',$profileId)
		->join('login','login.profileId = profile.profileId')
		->join('position','position.positionId = profile.positionId')
		->get('profile')
		->result_array();

		// echo "<pre>";
		// print_r($dataEmployee);
		// exit();

		return $dataEmployee;

	}

	public function EmployeeUpdate($dataUpdate) {

		$this->db
		->where('profileId',$dataUpdate['profileId'])
		->update('profile',$dataUpdate);

	}

	public function EmployeeDelete($dataDelete) {

		$this->db
		->where('profileId',$dataDelete['profileId'])
		->update('profile',$dataDelete);

		$dataLogin = array(
			'profileId' => $dataDelete['profileId'],
			'loginStatus' => 2,
			'loginLog' => "ลบพนักงาน",
      'loginLogName' => $_SESSION['profileName'],
		);

		$this->db
		->where('profileId',$dataLogin['profileId'])
		->update('login',$dataLogin);

	}

}
