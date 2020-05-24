<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Http\Requests;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
use App\Models\User;
>>>>>>> 6a9237b3dd55765c7195875c260eab9979f4a491
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
<<<<<<< HEAD
        $data=array('username'=>$username,"password"=>$hashedpassword,"name"=>$fullname);
        DB::table('users')->insert($data);
        return redirect('comics');
=======
        $data=array('username'=>$username,"password"=>$password,"name"=>$fullname);
        $user = new User();
        $check = $user->GetUser($username, $password);
        if(!$check->isEmpty()){
            return view('signup')->with('message','Tên đăng nhập đã được sử dụng');
        }
        else $user->NewUser($data);
        return view('login')->with('message','Đăng kí thành công. Đăng nhập để tiếp tục.');
>>>>>>> 6a9237b3dd55765c7195875c260eab9979f4a491
    }
    
}
