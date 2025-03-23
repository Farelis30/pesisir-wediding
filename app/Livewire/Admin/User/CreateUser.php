<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUser extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $role = 'user';
    public $password;
    public $password_confirmation;
    public $avatar;
    public $is_active = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users',
        'role' => 'required',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'is_active' => 'boolean'
    ];

    public function save()
    {
        $this->validate();

        $avatarPath = null;
        if ($this->avatar) {
            $avatarPath = $this->avatar->store('avatars', 'public');
        }

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role,
            'password' => bcrypt($this->password),
            'avatar' => $avatarPath,
            'is_active' => $this->is_active

        ]);

        session()->flash('message', 'User berhasil dibuat!');
        return redirect()->route('admin.users.index');
    }

    public function render()
    {
        return view('livewire.admin.user.create-user');
    }
}
