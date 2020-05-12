<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Http\Requests;
class SignUpController extends Controller
{
    //
    public function create(){
        return view('signup');
    }
    public function store(Request $request){
        $username = $request -> input('username');
        $password = $request -> input('password');
        $fullname = $request -> input('fullname');
        $data=array('username'=>$username,"password"=>$password,"name"=>$fullname);
        DB::table('users')->insert($data);
        return redirect('comics');
    }
    
}
