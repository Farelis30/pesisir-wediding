<?php

namespace App\Livewire\Admin\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CreateArticle extends Component
{
    use WithFileUploads, AuthorizesRequests;

    public $title;
    public $subtitle;
    public $slug;
    public $type;
    public $content;
    public $thumbnail;
    public $is_active = false;
    public $published_date;

    protected $rules = [
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'slug' => 'required|string|max:255',
        'type' => 'required|string',
        'content' => 'required|string',
        'thumbnail' => 'nullable|image|max:2048', // max 2MB
        'is_active' => 'boolean',
        'published_date' => 'nullable|date',
    ];

    public function mount()
    {
        $this->authorize('create', Article::class);
        $this->published_date = now()->format('Y-m-d');
    }

    public function save()
    {
        $this->validate();

        $thumbnailPath = null;
        if ($this->thumbnail) {
            $thumbnailPath = $this->thumbnail->store('articles', 'public');
        }

        $publishedDate = $this->is_active ? $this->published_date : null;

        Article::create([
            'user_id' => Auth::id(),
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'slug' => $this->slug,
            'type' => $this->type,
            'content' => $this->content,
            'thumbnail' => $thumbnailPath,
            'published_date' => $publishedDate,
            'is_active' => $this->is_active,
        ]);

        session()->flash('message', 'Artikel berhasil dibuat!');
        return redirect()->route('admin.articles.index');
    }
    public function render()
    {
        return view('livewire.admin.article.create-article');
    }
}
