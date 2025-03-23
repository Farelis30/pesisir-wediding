<?php

namespace App\Livewire\Admin\Package;

use App\Models\Package;
use Livewire\Component;
use Livewire\WithPagination;

class PackageList extends Component
{

    use WithPagination;

    public $search;
    public $status;
    protected $queryString = ['search', 'status'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function toggleActive($id)
    {
        $package = Package::find($id);
        $package->is_active = !$package->is_active;
        $package->save();
    }

    public function delete($id)
    {
        Package::find($id)->delete();
    }

    public function render()
    {
        $query = Package::where(function($query) {
            $query->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->orWhere('price', 'like', '%' . $this->search . '%')
                ->orWhere('is_active', 'like', '%' . $this->search . '%');
        });

        if ($this->status === 'active') {
            $query->where('is_active', true);
        } elseif ($this->status === 'inactive') {
            $query->where('is_active', false);
        }

        $packages = $query->orderBy('created_at', 'desc')
                        ->paginate(10);
        return view('livewire.admin.package.package-list', [
            'packages' => $packages
        ]);
    }
}
