<?php

namespace App\Livewire\Admin\Banner;

use Livewire\Component;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class EditBanner extends Component
{
    use WithFileUploads;

    public $bannerId;
    public $banner; // Simpan model Banner
    public $image;
    public $newImage;
    public $title;
    public $description;
    public $cta_text;
    public $cta_url;
    public $is_active;

    protected $rules = [
        'newImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif|max:2048',
        'title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'cta_text' => 'nullable|string|max:255',
        'cta_url' => 'nullable|url|max:255',
        'is_active' => 'boolean',
    ];

    public function mount($bannerId)
    {
        $this->bannerId = $bannerId;
        $this->banner = Banner::findOrFail($bannerId);

        $this->image = $this->banner->image ? Storage::url($this->banner->image) : null;
        $this->title = $this->banner->title;
        $this->description = $this->banner->description;
        $this->cta_text = $this->banner->cta_text;
        $this->cta_url = $this->banner->cta_url;
        $this->is_active = $this->banner->is_active;
    }

    public function update()
    {
        $this->validate();

        $imagePath = $this->banner->image;
        if ($this->newImage) {
            // Hapus gambar lama jika ada
            if ($this->banner->image) {
                Storage::disk('public')->delete($this->banner->image);
            }
            $imagePath = $this->newImage->store('banners', 'public');
        }

        $this->banner->update([
            'image' => $imagePath,
            'title' => $this->title,
            'description' => $this->description,
            'cta_text' => $this->cta_text,
            'cta_url' => $this->cta_url,
            'is_active' => $this->is_active,
        ]);

        session()->flash('message', 'Banner berhasil diupdate!');
        return redirect()->route('admin.banners.index');
    }

    public function deleteImage()
    {
        if ($this->banner->image) {
            Storage::disk('public')->delete($this->banner->image);
            $this->banner->update(['image' => null]);
            $this->image = null;
        }

        $this->dispatch('image-deleted', message: 'Gambar berhasil dihapus');
    }

    public function render()
    {
        return view('livewire.admin.banner.edit-banner');
    }
}
