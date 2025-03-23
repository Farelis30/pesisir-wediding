<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class UserList extends Component
{
    use WithPagination;

    #[Url]
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function toggleRole($id)
    {
        $user = User::find($id);
        $user->role = $user->role == 'admin' ? 'user' : 'admin';
        $user->save();
    }

    public function delete($id)
    {
        User::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.admin.user.user-list', [
            'users' => User::search($this->search)->orderBy('id', 'desc')->paginate(10),
        ]);
    }
}
