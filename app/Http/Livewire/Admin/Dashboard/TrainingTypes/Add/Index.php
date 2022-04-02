<?php

namespace App\Http\Livewire\Admin\Dashboard\TrainingTypes\Add;

use Exception;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\TrainingType;

class Index extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.admin.dashboard.training-types.add.index')
            ->extends('layouts.dashboard');
    }

    public function Add()
    {
        $validated = $this->validate([
            'name' => 'required|string',
        ]);
        try {
            TrainingType::create(array_merge($validated, ['slug' => strtoupper(Str::random(10))]));
            session()->flash('success', 'Added Successfully');
            return redirect(route('AdminTrainingTypes'));
        } catch (Exception $e) {
            return session()->flash('error', $e->getMessage());
        }
    }
}
