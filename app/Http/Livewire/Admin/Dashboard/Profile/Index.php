<?php

namespace App\Http\Livewire\Admin\Dashboard\Profile;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.profile.index')
        ->extends('layouts.dashboard')
        ->section('content');
    }
}
