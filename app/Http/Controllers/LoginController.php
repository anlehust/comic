<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
class LoginController extends Controller
{
    //
    public function insert(){
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
            return redirect('comics');
        }
        else{
            return redirect()->back()->withInput($request->input());
        }
    }
}
