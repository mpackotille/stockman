<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    private $articlesList;

    public function list(){
    //$articlesList=DB::select('select * from Articles ');
    $articlesList=Article::all();
    return view('articles.list')
            ->with("articles",$articlesList)
            ->with("count",count($articlesList)); 
    }

   

       

          
}
