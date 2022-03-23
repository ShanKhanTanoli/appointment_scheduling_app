<?php

namespace App\Http\Livewire\Admin\Dashboard\Appointment;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.appointment.index')
        ->extends('layouts.dashboard')
        ->section('content');
    }
}
