<?php

namespace App\Http\Livewire\Admin\Dashboard\TrainingTypes\Edit;

use Exception;
use Livewire\Component;
use App\Models\TrainingType;

class Index extends Component
{
    public $type;

    public $name;

    public function mount($slug)
    {
        $this->type = TrainingType::where('slug', $slug)
            ->first();
        if ($this->type) {
            $this->name = $this->type->name;
        } else {
            session()->flash('error', 'Something went wrong');
            return redirect(route('AdminTrainingTypes'));
        }
    }

    public function render()
    {
        return view('livewire.admin.dashboard.training-types.edit.index')
        ->extends('layouts.dashboard')
        ->with([$this->type]);
    }

    public function Update()
    {
        $validated = $this->validate([
            'name' => 'required|string',
        ]);
        try{
            $this->type->update($validated);
            session()->flash('success','Updated Successfully');
        }catch(Exception $e){
            return session()->flash('error',$e->getMessage());
        }
    }
}
