<?php

namespace App\Http\Livewire\Admin\Dashboard\Appointment;

use Livewire\Component;
use App\Models\Appointment;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        $appointments = Appointment::latest()->paginate(6);
        return view('livewire.admin.dashboard.appointment.index')
        ->with(['appointments' => $appointments])
        ->extends('layouts.dashboard')
        ->section('content');
    }

    public function Edit($id)
    {
        if($appointment = Appointment::find($id)){
            return redirect(route('AdminEditAppointment',$appointment->slug));
        }return session()->flash('error','Something went wrong');
    }

    public function Delete($id)
    {
        if($appointment = Appointment::find($id)){
            $appointment->delete();
            session()->flash('success','Deleted Successfully');
            return redirect(route('AdminAppointments'));
        }return session()->flash('error','Something went wrong');
    }
}
