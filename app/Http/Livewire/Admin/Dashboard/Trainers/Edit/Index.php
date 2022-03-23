<?php

namespace App\Http\Livewire\Admin\Dashboard\Trainers\Edit;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.trainers.edit.index')
        ->extends('layouts.dashboard')
        ->section('content');
    }
}
