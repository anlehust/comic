<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    //
    public function content(){
        $comics = DB::table('list_comic')->select('name')->get();
        return view('show',array('comics'=>$comics));
    }
}
