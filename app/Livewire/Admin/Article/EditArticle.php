<?php

namespace App\Livewire\Admin\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EditArticle extends Component
{
    use WithFileUploads, AuthorizesRequests;

    public $articleId;
    public $title;
    public $content;
    public $thumbnail;
    public $newThumbnail;
    public $is_active;
    public $published_date;
    public $article;

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'newThumbnail' => 'nullable|image|max:1024', // max 1MB
        'is_active' => 'boolean',
        'published_date' => 'nullable|date',
    ];

    public function mount($articleId)
    {
        $this->articleId = $articleId;
        $this->article = Article::findOrFail($articleId);

        $this->authorize('update', $this->article);

        $this->title = $this->article->title;
        $this->content = $this->article->content;
        $this->thumbnail = $this->article->thumbnail;
        $this->is_active = $this->article->is_active;
        $this->published_date = $this->article->published_date ? $this->article->published_date->format('Y-m-d') : now()->format('Y-m-d');
    }

    public function update()
    {
        $this->validate();

        $thumbnailPath = $this->thumbnail;
        if ($this->newThumbnail) {
            // Delete old thumbnail if exists
            if ($this->thumbnail) {
                Storage::disk('public')->delete($this->thumbnail);
            }
            $thumbnailPath = $this->newThumbnail->store('articles', 'public');
        }

        $publishedDate = $this->is_active ? $this->published_date : null;

        $this->article->update([
            'title' => $this->title,
            'content' => $this->content,
            'thumbnail' => $thumbnailPath,
            'published_date' => $publishedDate,
            'is_active' => $this->is_active,
        ]);

        session()->flash('message', 'Artikel berhasil diupdate!');
        return redirect()->route('admin.articles.index');
    }

    public function deleteThumbnail()
    {
        if ($this->thumbnail) {
            Storage::disk('public')->delete($this->thumbnail);
            $this->article->update(['thumbnail' => null]);
            $this->thumbnail = null;
        }

        $this->dispatchBrowserEvent('thumbnail-deleted', ['message' => 'Thumbnail berhasil dihapus']);
    }
    public function render()
    {
        return view('livewire.admin.article.edit-article');
    }
}
