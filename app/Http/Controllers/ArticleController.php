<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{

    public function index(Request $request)
    {
        $articles = Article::paginate(3);
        $array = explode('lang=',$request->getQueryString());
        if(isset($array[1])){
           if(Str::contains($array[1],'&page')){
               $lang = explode('&page=',$array[1])[0]?:"fa";
           }else{
               $lang =$array[1];
           }
        }
       else{
           $lang = isset($array[1])? $array[1]:"fa";
       }

        return view($lang.'.articles.index',compact('articles'));
    }

}
