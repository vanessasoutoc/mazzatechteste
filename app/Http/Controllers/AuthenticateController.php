<?php

namespace App\Http\Controllers;


use JWTAuth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Controllers\Api\ApiBaseController;

use Illuminate\Routing\Controller;

use App\User;

class AuthenticateController extends Controller
{
    public function authenticate(Request $request)
    {
        
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {

            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {

                return response()->json(['error' => 'Credencias inválidas.'], 401);

            }

        } catch (JWTException $e) {

            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'Erro ao criar o token.'], 500);

        }

        // all good so return the token
        return response()->json(compact('token'));
    }

    public function access(Request $request){
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }

    public function teste(){
        return response()->json('teste');
    }
}