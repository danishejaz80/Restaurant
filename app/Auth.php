<?php

namespace App;

use App\Models\User;

class Auth{

	public function user(){
		return User::find(isset($_SESSION['user']) ? $_SESSION['user'] : '');
	}

	public function check(){
		return isset($_SESSION['user']);
	}

	public function attempt($email, $password){
		$user = User::where('email', $email)->first();

		if(!$user){
			return false;
		}

		if(strcmp(md5($password), $user->password) == 0){
			$_SESSION['user'] = $user->id;
			return true;
		}
		return false;
	}

	public function attemptAdminLogin($email, $password){
		$user = User::where('email', $email)->first();

		if(!$user){
			return false;
		}

		if($user->role != 1){
			return false;
		}

		if(strcmp(md5($password), $user->password) == 0){
			$_SESSION['user'] = $user->id;
			return true;
		}
		return false;
	}

	public function logout(){
		unset($_SESSION['user']);
	}
	
	public function doesEmailExist($email){
		$user = User::where('email', $email)->first();
		if($user){
			return true;
		}
		return false;
	}
}
