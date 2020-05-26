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
        ->select('name_of_chap','name','date',DB::raw("STR_TO_DATE(date, '%d.%m.%Y') as date_format"))
        ->where('name','=',$name)
        ->orderByRaw('CHAR_LENGTH(name_of_chap)')
        ->orderBy('name_of_chap')
        ->orderBy('date_format','desc')
        ->paginate(10);
        //->get();
        return view('showchap',array('chaps'=>$chaps));
    }
    public function newcontent(){
        $chaps = DB::table('chap')
        ->select('name_of_chap','name','date',DB::raw("STR_TO_DATE(date, '%d.%m.%Y') as date_format"))
        ->orderBy('date_format','desc')
        ->limit(100)
        ->paginate(10);
        //->get();
        return view('showchap') ->with(array('chaps'=>$chaps));
    }
}
