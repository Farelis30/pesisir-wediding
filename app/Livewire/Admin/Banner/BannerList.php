<?php

namespace App\Livewire\Admin\Banner;

use Livewire\Component;
use App\Models\Banner;
use Livewire\WithPagination;

class BannerList extends Component
{
    use WithPagination;

    public $search;
    protected $queryString = ['search'];

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
        $banners = Banner::where('title', 'like', '%' . $this->search . '%')
            ->orWhere('description', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('livewire.admin.banner.banner-list', [
            'banners' => $banners
        ]);
    }
}
