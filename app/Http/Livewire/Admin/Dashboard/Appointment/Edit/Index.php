<?php

namespace App\Http\Livewire\Admin\Dashboard\Appointment\Edit;

use Exception;
use Livewire\Component;
use App\Models\Appointment;

class Index extends Component
{
    public $first_name;
    public $last_name;
    public $alias;
    public $site_id;
    public $trainer_id;

    public $EditAppointment;

    public function mount($slug)
    {
        $this->EditAppointment = Appointment::where('slug', $slug)
            ->first();
        if ($this->EditAppointment) {

            $this->first_name = $this->EditAppointment->first_name;
            $this->last_name = $this->EditAppointment->last_name;
            $this->alias = $this->EditAppointment->alias;
            $this->site_id = $this->EditAppointment->site_id;
            $this->trainer_id = $this->EditAppointment->trainer_id;
        } else {
            session()->flash('error', 'Something went wrong');
            return redirect(route('AdminAppointments'));
        }
    }

    public function render()
    {
        return view('livewire.admin.dashboard.appointment.edit.index')
            ->extends('layouts.dashboard')
            ->section('content');
    }

    public function UpdateAppointment()
    {
        $validated = $this->validate([
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'alias' => 'required|string|min:3',
            'site_id' => 'required|numeric',
            'trainer_id' => 'required|numeric',
        ]);
        try {
            $this->EditAppointment->update($validated);
            session()->flash('success', 'Appointment Updated Successfully');
        } catch (Exception $e) {
            return session()->flash('error', $e->getMessage());
        }
    }
}
