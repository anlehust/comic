<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    //
    public function content(Request $request){
        $username = $request->session()->get('username');
        $list_comic = new Comic();
        $data = $request->session()->get('data');
        $comics = $list_comic->GetAllComic();
        if($data != null)
        return view('showcomic')->with(array('comics'=>$comics))->with('username',$username)->with('data',$data[0]);
        else 
        return view('showcomic')->with(array('comics'=>$comics))->with('username',$username);
    }
}
