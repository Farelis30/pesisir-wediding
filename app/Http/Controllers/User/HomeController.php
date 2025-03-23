<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('is_active', true)->get();

        $articles = Article::where('is_active', true)->get()->take(3);

        return view('user.home.index', compact('banners', 'articles'));
    }
}
