<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function login(Request $request){

		$validation = $request->validation([
			'email' => 'requierd|email',
			'password' => 'requierd'
		]);

		$login = [
			'email' => $request->email,
			'password' => $request->password
		];

		if(Auth::attempt($login)){
			$user = Auth::user();
			$token = $user->createToken('api access')->accessToken;
			return response([
				'status' => 'success',
				'token' => $token
			]);
		}

		return response([
			'status' => 'error',
			'massage' => 'auth fails'
		]);
	}
}