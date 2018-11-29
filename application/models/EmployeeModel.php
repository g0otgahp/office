<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeModel extends CI_Model {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/

	public function EmployeeSelect()
	{
		$dataShow = $this->db
		// ->where('profile.profileStatus',1)
		->join('login','login.profileId = profile.profileId')
		->join('position','position.positionId = profile.positionId')
		->get('profile')
		->result_array();

		return $dataShow;
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
			'profileImage' => $dataInsert['profileImage'],
			'profileAddress' => $dataInsert['profileAddress'],
			'positionId' => $dataInsert['positionId'],
			'profileLog' => "เพิ่มพนักงาน",
			'profileLogName' => $_SESSION['profileName'],
		);

		// $this->debug->log($profile);


		$this->db->insert('profile',$profile);
		$id = $this->db->insert_id();

		$login = array(
			'loginUsername' => $dataInsert['loginUsername'],
			'loginPassword' => md5($dataInsert['loginPassword']),
			'profileId' => $id,
			'loginLog' => "เพิ่มพนักงาน",
			'loginLogName' => $_SESSION['profileName'],
		);

		// $this->debug->log($login);


		$this->db->insert('login',$login);

	}

	public function EmployeeSelectForUpdate($profileId)
	{
		$dataUpdate = $this->db
		// ->where('profile.profileStatus',1)
		->where('profile.profileId',$profileId)
		->join('login','login.profileId = profile.profileId')
		->join('position','position.positionId = profile.positionId')
		->get('profile')
		->result_array();

		return $dataUpdate;
	}

	public function EmployeeUpdate($dataUpdate)
	{

		$profile = array(
			'profilePrefix' => $dataUpdate['profilePrefix'],
			'profileName' => $dataUpdate['profileName'],
			'profileSurname' => $dataUpdate['profileSurname'],
			'profileNickname' => $dataUpdate['profileNickname'],
			'profileSex' => $dataUpdate['profileSex'],
			'profileCitizenId' => $dataUpdate['profileCitizenId'],
			'profileEmail' => $dataUpdate['profileEmail'],
			'profilePhone' => $dataUpdate['profilePhone'],
			'profileImage' => $dataUpdate['profileImage'],
			'profileAddress' => $dataUpdate['profileAddress'],
			'positionId' => $dataUpdate['positionId'],
			'profileLog' => "แก้ไขพนักงาน",
			'profileLogName' => $_SESSION['profileName'],
		);

		$this->db
		->where('profileId',$dataUpdate['profileId'])
		->update('profile',$profile);

		$login = array(
			'profileId' => $dataUpdate['profileId'],
			'loginLog' => "แก้ไขพนักงาน",
			'loginLogName' => $_SESSION['profileName'],
		);

		$this->db
		->where('profileId',$dataUpdate['profileId'])
		->update('login',$login);

	}

	public function EmployeeDelete($profileChoice,$profileId)
	{

		// echo "<pre>";
		// print_r($profileChoice);
		// exit();

		if($profileChoice == "Normal"){

			$dataDeleteProfile = array(
				'profileId' => $profileId,
				'profileStatus' => 1,
				'profileLog' => "ปกติ",
				'profileLogName' => $_SESSION['profileName'],
			);

			$this->db
			->where('profileId',$dataDeleteProfile['profileId'])
			->update('profile',$dataDeleteProfile);

			$dataDeleteLogin = array(
				'profileId' => $profileId,
				'loginStatus' => 1,
				'loginLog' => "ปกติ",
				'loginLogName' => $_SESSION['profileName'],
			);

			$this->db
			->where('profileId',$dataDeleteLogin['profileId'])
			->update('login',$dataDeleteLogin);

		}else if($profileChoice == "Workbreak"){

			$dataDeleteProfile = array(
				'profileId' => $profileId,
				'profileStatus' => 3,
				'profileLog' => "พักงาน",
				'profileLogName' => $_SESSION['profileName'],
			);

			$this->db
			->where('profileId',$dataDeleteProfile['profileId'])
			->update('profile',$dataDeleteProfile);

			$dataDeleteLogin = array(
				'profileId' => $profileId,
				'loginStatus' => 3,
				'loginLog' => "พักงาน",
				'loginLogName' => $_SESSION['profileName'],
			);

			$this->db
			->where('profileId',$dataDeleteLogin['profileId'])
			->update('login',$dataDeleteLogin);

		}else{

			$dataDeleteProfile = array(
				'profileId' => $profileId,
				'profileStatus' => 2,
				'profileLog' => "พ้นสภาพ",
				'profileLogName' => $_SESSION['profileName'],
			);

			$this->db
			->where('profileId',$dataDeleteProfile['profileId'])
			->update('profile',$dataDeleteProfile);

			$dataDeleteLogin = array(
				'profileId' => $profileId,
				'loginStatus' => 2,
				'loginLog' => "พ้นสภาพ",
				'loginLogName' => $_SESSION['profileName'],
			);

			$this->db
			->where('profileId',$dataDeleteLogin['profileId'])
			->update('login',$dataDeleteLogin);

		}

	}

}
