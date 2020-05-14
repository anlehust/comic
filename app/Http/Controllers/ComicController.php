<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    //
    public function content(Request $request){
        $username = $request->session()->get('username');
        $comics = DB::table('list_comic')->select('name')->get();
        return view('showcomic')->with(array('comics'=>$comics))->with('username',$username);
    }
}
