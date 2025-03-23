<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('is_active', true)->paginate(10);
        return view('user.article.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->get()->first();
        return view('user.article.show', compact('article'));
    }
}
