<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dini_model;

class diniController extends Controller
{
    public function gethome (){
        $results = dini_model::all();
        return view ('tokobuku.index', ["barang" => $results]);
    }
    public function getview ($id){
        $results = dini_model::where('no',$id)->get();
        return view ('tokobuku.index', ["barang" => $results]);
    }
}
