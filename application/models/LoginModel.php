<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

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

	public function CheckLogin($checkLogin)
	{

		$dataLogin = $this->db
		->where('loginUsername',$checkLogin['username'])
		->where('loginPassword',md5($checkLogin['password']))
		->get('login')
		->result_array();

		return $dataLogin;

	}

	public function SelectProfile($dataLogin)
	{

		$dataProfile = $this->db
		// ->where('profile.profileStatus',1)
		->where('profile.profileId',$dataLogin[0]['profileId'])
		->join('login','login.profileId = profile.profileId')
		->join('position','position.positionId = profile.positionId')
		->get('profile')
		->result_array();

		// echo "<pre>";
		// print_r($dataProfile);
		// exit();

		return $dataProfile;

	}


}
