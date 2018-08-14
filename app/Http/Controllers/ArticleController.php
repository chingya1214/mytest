<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function Json($id){
        echo(json_encode(Article::find($id)));
        exit();
}
    public function Show(){
        $id_list = Article::all()->pluck('id');
     //   dd($id_list);
        return view('Article',compact('id_list'));

}
}
