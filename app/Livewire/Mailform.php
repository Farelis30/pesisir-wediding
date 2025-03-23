<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Mailform extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public $successMessage = '';
    public $isLoading = false;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function sendEmail()
    {
        $this->validate();

        // Send email
        Mail::to('admin@pesisirwedding.com')->send(new ContactMail(
            $this->name,
            $this->email,
            $this->message
        ));

        // Reset form
        $this->reset(['name', 'email', 'message']);

        $this->isLoading = false;

        // Set success message directly in component
        $this->successMessage = 'Pesan Anda telah berhasil dikirim!';

        $this->dispatch('success-message-shown');
    }

    public function render()
    {
        return view('livewire.mailform');
    }
}
