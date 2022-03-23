<?php

namespace App\Http\Livewire\Admin\Dashboard\Appointment\Add;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.appointment.add.index')
        ->extends('layouts.dashboard')
        ->section('content');
    }
}