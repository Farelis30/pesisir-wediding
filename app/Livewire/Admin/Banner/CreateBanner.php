<?php

namespace App\Livewire\Admin\Banner;

use Livewire\Component;
use App\Models\Banner;
use Livewire\WithFileUploads;

class CreateBanner extends Component
{
    use WithFileUploads;

    public $image;
    public $title;
    public $description;
    public $cta_text;
    public $cta_url;
    public $is_active = true;

    protected $rules = [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,avif|max:2048',
        'title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'cta_text' => 'nullable|string|max:255',
        'cta_url' => 'nullable|url|max:255',
        'is_active' => 'boolean',
    ];

    public function save()
    {
        $this->validate();

        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('banners', 'public');
        }

        Banner::create([
            'image' => $imagePath,
            'title' => $this->title,
            'description' => $this->description,
            'cta_text' => $this->cta_text,
            'cta_url' => $this->cta_url,
            'is_active' => $this->is_active,
        ]);

        session()->flash('message', 'Banner berhasil dibuat!');
        return redirect()->route('admin.banners.index');
    }
    public function render()
    {
        return view('livewire.admin.banner.create-banner');
    }
}
