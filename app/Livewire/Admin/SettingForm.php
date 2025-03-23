<?php

namespace App\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class SettingForm extends Component
{
    use WithFileUploads;

    public $companyName, $description, $logo, $address, $email, $phone;
    public $currentLogo;

    public function mount()
    {
        $setting = Setting::first();
        if ($setting) {
            $this->companyName = $setting->companyName;
            $this->description = $setting->description;
            $this->address = $setting->address;
            $this->email = $setting->email;
            $this->phone = $setting->phone;
            $this->currentLogo = $setting->logo;
        }
    }

    public function updateSetting()
    {
        $this->validate([
            'companyName' => 'required|string',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|max:1024',
            'address' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        $setting = Setting::firstOrCreate([]);

        if ($this->logo) {
            $logoPath = $this->logo->store('logos', 'public');
            $setting->logo = $logoPath;
        }

        $setting->update([
            'companyName' => $this->companyName,
            'description' => $this->description,
            'address' => $this->address,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        session()->flash('message', 'Pengaturan berhasil diupdate!, silahkan refresh halaman untuk melihat perubahan');
    }

    public function render()
    {
        return view('livewire.admin.setting-form');
    }
}
