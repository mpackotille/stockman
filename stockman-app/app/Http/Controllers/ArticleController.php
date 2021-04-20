<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    private $articlesList;

    public function list(){
    $article1 = new Article(1,"Sucre",20);
    $article2 = new Article(2,"Sel",30);
    $articlesList=array($article1,$article2);
    return view('articles.list')
            ->with("articles",$articlesList)
            ->with("count",count($articlesList));
    }
}
