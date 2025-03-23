<?php

namespace App\Livewire\Admin\Package;

use App\Models\Package;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePackage extends Component
{
    use WithFileUploads;

    public $title;
    public $slug;
    public $description;
    public $thumbnail;
    public $price;
    public $is_active = false;

    protected $rules = [
        'title' => 'required|string',
        'slug' => 'required|string|unique:packages,slug',
        'description' => 'required|string',
        'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'includes' => 'required|array',
        'price' => 'required|numeric',
        'is_active' => 'required|boolean',
    ];

    public $includes = [''];

    public function addInclude()
    {
        $this->includes[] = '';  // Menambahkan input baru
    }

    public function removeInclude($index)
    {
        unset($this->includes[$index]);  // Menghapus input berdasarkan index
        $this->includes = array_values($this->includes);  // Re-index array setelah item dihapus
    }

    public function save()
    {
        $this->validate();

        $thumbnailPath = null;
        if ($this->thumbnail) {
            $thumbnailPath = $this->thumbnail->store('packages', 'public');
        }

        Package::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'thumbnail' => $thumbnailPath,
            'includes' => json_encode($this->includes),
            'price' => $this->price,
            'is_active' => $this->is_active,
        ]);

        session()->flash('message', 'Paket berhasil dibuat!');
        return redirect()->route('admin.packages.index');
    }

    public function render()
    {
        return view('livewire.admin.package.create-package');
    }
}
