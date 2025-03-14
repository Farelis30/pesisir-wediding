<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class CreateUser extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $role = 'user';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',
        'role' => 'required'
    ];

    public function save()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'role' => $this->role
        ]);

        session()->flash('message', 'User berhasil dibuat!');
        return redirect()->route('admin.users.index');
    }

    public function render()
    {
        return view('livewire.admin.user.create-user');
    }
}
