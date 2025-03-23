<?php

namespace App\Livewire\Admin\Package;

use App\Models\Package;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPackage extends Component
{
    use WithFileUploads;

    public $packageId;
    public $title;
    public $slug;
    public $description;
    public $thumbnail;
    public $newThumbnail;
    public $includes = [];
    public $price;
    public $is_active;
    public $package;

    protected $rules = [
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'description' => 'required|string',
        'newThumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'includes' => 'required|array',
        'price' => 'required|numeric',
        'is_active' => 'required|boolean',
    ];

    public function mount($packageId)
    {
        $this->packageId = $packageId;
        $this->package = Package::findOrFail($packageId);

        $this->title = $this->package->title;
        $this->slug = $this->package->slug;
        $this->description = $this->package->description;
        $this->thumbnail = $this->package->thumbnail;
        $this->includes = json_decode($this->package->includes, true);
        $this->price = $this->package->price;
        $this->is_active = $this->package->is_active;
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
            $thumbnailPath = $this->newThumbnail->store('packages', 'public');
        }

        $this->package->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'thumbnail' => $thumbnailPath,
            'includes' => json_encode($this->includes),
            'price' => $this->price,
            'is_active' => $this->is_active,
        ]);

        session()->flash('message', 'Paket berhasil diupdate!');
        return redirect()->route('admin.packages.index');
    }

    public function render()
    {
        return view('livewire.admin.package.edit-package');
    }
}
