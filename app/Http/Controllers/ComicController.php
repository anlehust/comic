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
        $comics = $list_comic->GetAllComic();
        return view('showcomic')->with(array('comics'=>$comics))->with('username',$username);
    }
}
