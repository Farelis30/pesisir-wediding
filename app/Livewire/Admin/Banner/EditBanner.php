<?php

namespace App\Livewire\Admin\Banner;

use Livewire\Component;
use App\Models\Banner;

class EditBanner extends Component
{
    public $bannerId;
    public $title;
    public $description;
    public $cta_text;
    public $cta_url;
    public $is_active;

    protected $rules = [
        'title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'cta_text' => 'nullable|string|max:255',
        'cta_url' => 'nullable|url|max:255',
        'is_active' => 'boolean',
    ];

    public function mount($bannerId)
    {
        $this->bannerId = $bannerId;
        $banner = Banner::findOrFail($bannerId);
        $this->title = $banner->title;
        $this->description = $banner->description;
        $this->cta_text = $banner->cta_text;
        $this->cta_url = $banner->cta_url;
        $this->is_active = $banner->is_active;
    }

    public function update()
    {
        $this->validate();

        $banner = Banner::find($this->bannerId);
        $banner->update([
            'title' => $this->title,
            'description' => $this->description,
            'cta_text' => $this->cta_text,
            'cta_url' => $this->cta_url,
            'is_active' => $this->is_active,
        ]);

        session()->flash('message', 'Banner berhasil diupdate!');
        return redirect()->route('admin.banners.index');
    }

    public function render()
    {
        return view('livewire.admin.banner.edit-banner');
    }
}
