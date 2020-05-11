<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use Illuminate\Http\Request;

class ChapController extends Controller
{
    //
    public function content($name){
        $chaps = DB::table('chap')
        ->select('name_of_chap','name')
        ->where('name','=',$name)
        ->get();
        return view('showchap',array('chaps'=>$chaps));
    }
}
