<?php

namespace App\Http\Controllers;

use App\test0807;
use Illuminate\Http\Request;

class test0807Controller extends Controller
{
    public function Json2($id){
        echo(json_encode(test0807::find($id)));
        exit();
    }
    public function Show2(){
        $id_list = test0807::all()->pluck('id');
        //   dd($id_list);
        return view('test0807',compact('id_list'));

    }
}
