<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditUser extends Component
{
    use WithFileUploads;

    public $userId;
    public $name;
    public $email;
    public $role = 'user';
    public $avatar;
    public $newAvatar;
    public $is_active;
    public $user;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'role' => 'required',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'is_active' => 'boolean'
    ];

    public function mount($userId)
    {
        $this->userId = $userId;
        $this->user = User::findOrFail($userId);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->role = $this->user->role;
        $this->avatar = $this->user->avatar;
        $this->is_active = $this->user->is_active;
    }

    public function update()
    {
        $this->validate();

        $avatarPath = $this->avatar;
        if ($this->newAvatar) {
            // Hapus gambar lama jika ada
            if ($this->avatar) {
                Storage::disk('public')->delete($this->avatar);
            }
            $avatarPath = $this->newAvatar->store('avatars', 'public');
        }

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role,
            'avatar' => $avatarPath,
            'is_active' => $this->is_active
        ]);

        session()->flash('message', 'User berhasil diupdate!');
        return redirect()->route('admin.users.index');
    }

    public function deleteAvatar()
    {
        if ($this->avatar) {
            Storage::disk('public')->delete($this->avatar);
            $this->avatar = null;
        }
    }

    public function render()
    {
        return view('livewire.admin.user.edit-user');
    }
}
