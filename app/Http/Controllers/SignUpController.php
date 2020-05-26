<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class SignUpController extends Controller
{
    //
    public function create(){
        return view('signup');
    }
    public function store(Request $request){
        $username = $request -> input('username');
        $password = $request -> input('password');
        $hashedpassword = Hash::make($password);
        $fullname = $request -> input('fullname');
        $data=array('username'=>$username,"password"=>$password,"name"=>$fullname);
        $user = new User();
        $check = $user->GetUser($username, $password);
        if(!$check->isEmpty()){
            return view('signup')->with('message','Tên đăng nhập đã được sử dụng');
        }
        else $user->NewUser($data);
        return view('login')->with('message','Đăng kí thành công. Đăng nhập để tiếp tục.');
    }
    
}
