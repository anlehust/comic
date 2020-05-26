<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    public function GetUser($username, $password){
        $data = DB::table('users')
        ->select('user_id','recent_chap','name')
        ->where('username','=',$username)
        ->where('password','=',$password)
        ->get();
        return $data;
    }
    public function NewUser($data){
        if(DB::table('users')->insert($data)) return true;
        return false;
    }
}
