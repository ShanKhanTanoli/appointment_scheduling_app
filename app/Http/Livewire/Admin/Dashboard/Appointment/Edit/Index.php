<?php

namespace App\Http\Livewire\Admin\Dashboard\Appointment\Edit;

use App\Mail\TrainerNotification;
use Exception;
use App\Models\Trainer;
use Livewire\Component;
use App\Models\Appointment;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Mail;

class Index extends Component
{
    public $first_name;
    public $last_name;
    public $alias;
    public $site_id;
    public $trainer_id;
    public $date;
    public $time;
    public $training_type_id;
    public $appointment;

    public function mount($slug)
    {
        $this->appointment = Appointment::where('slug', $slug)
            ->first();
        if ($this->appointment) {

            $this->first_name = $this->appointment->first_name;
            $this->last_name = $this->appointment->last_name;
            $this->alias = $this->appointment->alias;
            $this->site_id = $this->appointment->site_id;
            $this->trainer_id = $this->appointment->trainer_id;
            $this->date = $this->appointment->date;
            $this->time = $this->appointment->time;
            $this->training_type_id = $this->appointment->training_type_id;
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
        $msg = [
            'time.date_format' =>  'Please select a valid time',
        ];
        $validated = $this->validate([
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'alias' => 'required|string|min:3',
            'site_id' => 'required|numeric',
            'trainer_id' => 'required|numeric',
            'date' => 'required|date|after_or_equal:' . $this->date,
            'time' => 'required|date_format:H:i:s|after_or_equal:' . $this->time,
            'training_type_id' => 'required|numeric',
        ], $msg);

        $trainer = Trainer::find($validated['trainer_id']);

        $data = [
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'alias' => $validated['alias'],
            'date' => $validated['date'],
            'time' => $validated['time'],
            'training_type_id' => $validated['training_type_id'],
        ];

        try {
            $this->appointment->update($validated);
            $trainer->notify(new EmailNotification($data));
            session()->flash('success', 'An Email has been sent to ' . $trainer->name);
        } catch (Exception $e) {
            return session()->flash('error', $e->getMessage());
        }
    }
}
