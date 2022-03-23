<?php

namespace App\Http\Livewire\Admin\Dashboard\Trainers\Edit;

use Exception;
use App\Models\Trainer;
use Livewire\Component;

class Index extends Component
{
    public $EditTrainer;

    public $name;
    public $email;
    public $number;
    public $site_id;


    public function mount($slug)
    {
       $this->EditTrainer = Trainer::where('slug',$slug)
       ->first();
       if($this->EditTrainer){

        $this->name = $this->EditTrainer->name;
        $this->email = $this->EditTrainer->email;
        $this->number = $this->EditTrainer->number;
        $this->site_id = $this->EditTrainer->site_id;

       }else{
        session()->flash('error','Something went wrong');
        return redirect(route('AdminTrainers')); 
       }
    }

    public function render()
    {
        return view('livewire.admin.dashboard.trainers.edit.index')
        ->extends('layouts.dashboard')
        ->section('content');
    }

    public function UpdateTrainer()
    {
        $validated = $this->validate([
           'name' => 'required|string|min:3', 
           'email' => 'required|email|unique:trainers,email,'.$this->EditTrainer->id, 
           'number' => 'required|numeric|unique:trainers,number,'.$this->EditTrainer->id,
           'site_id' => 'required|numeric',  
        ]);

        try{
            $this->EditTrainer->update($validated);
            session()->flash('success','Trainer Updated Successfully');
        }catch(Exception $e){
            return session()->flash('error',$e->getMessage());
        }
    }
}
