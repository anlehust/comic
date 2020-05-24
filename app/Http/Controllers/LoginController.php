<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Session;
use Illuminate\Support\Collection;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;
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
        $id = DB::table('users')
        ->select('user_id')
        ->where('username','=',$username)
        ->where('password','=',$password)
        ->get();
        if(!$id->isEmpty()){
            $request->session()->put('username', $username);
            return redirect()->route('listcomics');
        }
        else{
            return view('login')->with('fail', 'Đăng nhập không thành công, sai username hoặc password.');
        }
    }
    public function skip(){
        return redirect()->route('listcomics');
    }
}
