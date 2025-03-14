<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public $userId;
    public $name;
    public $email;
    public $role = 'user';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'role' => 'required'
    ];

    public function mount($userId)
    {
        $this->userId = $userId;
        $user = User::findOrFail($userId);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->role;
    }

    public function update()
    {
        $this->validate();

        $user = User::find($this->userId);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role
        ]);

        session()->flash('message', 'User berhasil diupdate!');
        return redirect()->route('admin.users.index');
    }

    public function render()
    {
        return view('livewire.admin.user.edit-user');
    }
}
