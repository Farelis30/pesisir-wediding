<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public $search = '';
    protected $queryString = ['search'];

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
        $users = User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orWhere('role', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('livewire.admin.user.user-list', [
            'users' => $users
        ]);
    }
}
