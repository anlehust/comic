<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //
    public function GetAllComic(){
       return DB::table('list_comic')->select('name')->paginate(15);
    }
    public function GetComicBy1stCharacter($character){
        return DB::table('list_comic')->select('name');
    }
    public function GetImage($id_chap){
        return DB::table('image')->select('source')
        ->where('id_chap','=',$id_chap)
        ->paginate('1');
    }
}
