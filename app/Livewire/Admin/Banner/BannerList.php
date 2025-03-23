<?php

namespace App\Livewire\Admin\Banner;

use Livewire\Component;
use App\Models\Banner;
use Livewire\WithPagination;

class BannerList extends Component
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
        $banner = Banner::find($id);
        $banner->is_active = !$banner->is_active;
        $banner->save();
    }

    public function delete($id)
    {
        Banner::find($id)->delete();
    }

    public function render()
    {
        $query = Banner::where(function($query) {
            $query->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('description', 'like', '%' . $this->search . '%')
                  ->orWhere('cta_text', 'like', '%' . $this->search . '%');
        });

        if ($this->status === 'active') {
            $query->where('is_active', true);
        } elseif ($this->status === 'inactive') {
            $query->where('is_active', false);
        }

        $banners = $query->orderBy('created_at', 'desc')
                        ->paginate(2);
        return view('livewire.admin.banner.banner-list', [
            'banners' => $banners
        ]);
    }
}
