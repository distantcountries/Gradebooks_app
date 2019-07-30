<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; //zadatak 4
use Tymon\JWTAuth\Exceptions\JWTException; //zadatak 4

//zadatak 4
class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticate(Request $request) {
        $credentials = $request->only(['email', 'password']);

        try {
            if(! $token = \JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));
        // compact token kao da smo napisali 'token' => $token

        // return response()->json(
        //     [
        //     'token' => $token,
        //     'user' => auth()->user()
        //     ]
        // );
    }
}

