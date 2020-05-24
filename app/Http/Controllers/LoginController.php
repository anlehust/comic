<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Session;
use Illuminate\Support\Collection;
use Illuminate\Routing\Redirector;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
use App\Models\User;
>>>>>>> 6a9237b3dd55765c7195875c260eab9979f4a491
class LoginController extends Controller
{
    //
    public function insert(Request $request){
        if($request->session()->has('username')){
            return redirect()->route('listcomics');
        }
        else
            return view('login');
    }
    public function check(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $user = new User();
        $id = $user->GetUser($username, $password);
        if(!$id->isEmpty()){
            $request->session()->put('username', $username);
            return redirect()->route('listcomics');
        }
        else{
            return view('login')->with('message', 'Đăng nhập không thành công, sai username hoặc password.');
        }
    }
    public function skip(){
        return redirect()->route('listcomics');
    }
}
