<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Articles::first();
        return view('about')->with('article', $article);
    }
}
