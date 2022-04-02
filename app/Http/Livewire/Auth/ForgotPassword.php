<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword;

class ForgotPassword extends Component
{
    use Notifiable;

    public $email;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function mount()
    {
        if (auth()->user()) {
            redirect(route('AdminDashboard'));
        }
    }

    public function routeNotificationForMail()
    {
        return $this->email;
    }

    public function recoverPassword()
    {
        $this->validate();
        $user = User::where('email', $this->email)->first();
        if ($user) {
            $this->notify(new ResetPassword($user->id));
            return session()->flash('success', 'A password reset link has been sent to ' . $this->email);
        } else {
            return session()->flash('error', 'Email not found');
        }
    }

    public function render()
    {
        return view('livewire.auth.passwords.email')
            ->extends('layouts.auth')
            ->section('content');
    }
}
