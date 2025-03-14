<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ArticleController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        return view('admin.article.index');
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $this->authorize('update', $article);

        return view('admin.article.edit', ['articleId' => $id]);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.article.show', compact('article'));
    }
}
