<?php

namespace App\Http\Livewire\Admin\Dashboard\Appointment\Add;

use Exception;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Str;

class Index extends Component
{
    public $first_name;
    public $last_name;
    public $alias;
    public $site_id;
    public $trainer_id;

    public function render()
    {
        return view('livewire.admin.dashboard.appointment.add.index')
            ->extends('layouts.dashboard')
            ->section('content');
    }

    public function AddAppointment()
    {
        $validated = $this->validate([
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'alias' => 'required|string|min:3',
            'site_id' => 'required|numeric',
            'trainer_id' => 'required|numeric',
        ]);

        try{
            Appointment::create(array_merge($validated,['slug' => strtoupper(Str::random(20))]));
            session()->flash('success','Appointment Added Successfully');
            return redirect(route('AdminAppointments'));
        }catch(Exception $e){
            return session()->flash('error',$e->getMessage());
        }
    }
}
