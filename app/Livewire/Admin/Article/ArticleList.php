<?php

namespace App\Livewire\Admin\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ArticleList extends Component
{
    use WithPagination, AuthorizesRequests;

    public $search = '';
    public $status = '';
    protected $queryString = ['search', 'status'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingStatus()
    {
        $this->resetPage();
    }

    public function toggleActive($id)
    {
        $article = Article::find($id);
        $this->authorize('update', $article);

        $article->is_active = !$article->is_active;

        // If activating and published_date is null, set it to now
        if ($article->is_active && is_null($article->published_date)) {
            $article->published_date = now();
        }

        $article->save();

        $this->dispatch('article-updated', message:'Status artikel berhasil diubah');
    }

    public function delete($id)
    {
        $article = Article::find($id);
        $this->authorize('delete', $article);

        $article->delete();
        $this->dispatch('article-deleted', message:'Artikel berhasil dihapus');
    }

    public function render()
    {
        $query = Article::where(function($query) {
            $query->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('content', 'like', '%' . $this->search . '%');
        });

        if ($this->status === 'active') {
            $query->where('is_active', true);
        } elseif ($this->status === 'inactive') {
            $query->where('is_active', false);
        }

        $articles = $query->orderBy('created_at', 'desc')
                        ->paginate(10);

        return view('livewire.admin.article.article-list', [
            'articles' => $articles
        ]);
    }
}
