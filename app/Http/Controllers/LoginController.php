<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Session;
use Illuminate\Support\Collection;
use Illuminate\Routing\Redirector;
use App\Models\User;
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
        $data = $user->GetUser($username, $password);
        if(!$data->isEmpty()){
            $request->session()->put('data',$data);
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
