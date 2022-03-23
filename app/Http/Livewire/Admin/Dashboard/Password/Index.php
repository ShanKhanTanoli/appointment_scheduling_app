<?php

namespace App\Http\Livewire\Admin\Dashboard\Password;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.password.index')
        ->extends('layouts.dashboard')
        ->section('content');
    }
}
