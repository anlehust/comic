<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
// use JWTAuth;
// use JWTAuthException;
class ViewProfileController extends Controller
{
    //
    
    public function view(Request $request){
        $data = $request->session()->get('data');
        return view('viewprofile')->with('data',$data[0]);
    }
    // public function login(Request $request){
    //     $credentials = $request->only('email', 'password');
    //     $token = null;
    //     try {
    //        if (!$token = JWTAuth::attempt($credentials)) {
    //         return response()->json(['invalid_email_or_password'], 422);
    //        }
    //     } catch (JWTAuthException $e) {
    //         return response()->json(['failed_to_create_token'], 500);
    //     }
    //     return response()->json(compact('token'));
    // }
    // public function getUserInfo(Request $request){
    //     $user = JWTAuth::toUser($request->token);
    //     return response()->json(['result' => $user]);
    // }
}
