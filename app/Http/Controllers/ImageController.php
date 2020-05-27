<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function content($name_of_comic,$name_of_chap, Request $request){
        $images = DB::table('image')
        ->select('source')
        ->where('name_of_chap','=',$name_of_chap)
        ->get();
        return view('showimage',array('images'=>$images));
    }
}
