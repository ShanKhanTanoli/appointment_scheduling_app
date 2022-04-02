<?php

namespace App\Http\Livewire\Auth;

use App\Helpers\Redirect;
use Livewire\Component;
use App\Models\User;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function mount()
    {
        if (auth()->user()) {
            redirect(route('AdminDashboard'));
        }
    }

    public function login()
    {
        $this->validate();
        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            $user = User::where(["email" => $this->email])->first();
            auth()->login($user);
            return redirect(route('AdminDashboard'));
        } else {
            return $this->addError('email', trans('auth.failed'));
        }
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->extends('layouts.auth');
    }
}
