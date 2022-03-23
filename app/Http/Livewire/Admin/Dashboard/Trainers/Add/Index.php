<?php

namespace App\Http\Livewire\Admin\Dashboard\Trainers\Add;

use Exception;
use App\Models\Trainer;
use Livewire\Component;
use Illuminate\Support\Str;

class Index extends Component
{
    public $name;
    public $email;
    public $number;
    public $site_id;

    public function render()
    {
        return view('livewire.admin.dashboard.trainers.add.index')
            ->extends('layouts.dashboard')
            ->section('content');
    }

    public function AddTrainer()
    {
        $validated = $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:trainers,email',
            'number' => 'required|numeric|unique:trainers,number',
            'site_id' => 'required|numeric',
        ]);

        try {
            Trainer::create(array_merge($validated,['slug' => strtoupper(Str::random(20)) ]));
            session()->flash('success', 'Trainer Added Successfully');
            return redirect(route('AdminTrainers'));
        } catch (Exception $e) {
            return session()->flash('error', $e->getMessage());
        }
    }
}
