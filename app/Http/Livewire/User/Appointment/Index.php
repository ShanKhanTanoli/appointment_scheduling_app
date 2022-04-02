<?php

namespace App\Http\Livewire\User\Appointment;

use Exception;
use App\Models\Site;
use App\Models\Trainer;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Str;
use App\Notifications\EmailNotification;

class Index extends Component
{
    public $site;
    public $trainers;

    public $first_name;
    public $last_name;
    public $alias;
    public $trainer_id;
    public $date;
    public $time;
    public $training_type_id;

    public function mount($slug)
    {
        $this->site = Site::where('slug', $slug)
            ->first();
        if ($this->site) {
            $this->site_id = $this->site->id;
            $this->trainers = $this->site->trainers;
        } else {
            session()->flash('error', 'Something went wrong');
            return redirect(route('main'));
        }
    }

    public function render()
    {
        return view('livewire.user.appointment.index')
            ->with(['site' => $this->site, 'trainers' => $this->trainers])
            ->extends('layouts.auth')
            ->section('content');
    }

    public function AddAppointment()
    {
        $validated = $this->validate([
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'alias' => 'required|string|min:3',
            'trainer_id' => 'required|numeric',
            'date' => 'required|date|after_or_equal:' . date('Y-m-d'),
            'time' => 'required|date_format:H:i|after_or_equal:' . date('H:i'),
            'training_type_id' => 'required|numeric',
        ]);

        $trainer = Trainer::find($validated['trainer_id']);

        $data = [
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'alias' => $validated['alias'],
        ];

        $appoint_data = [
            'slug' => strtoupper(Str::random(20)),
            'site_id' => $this->site->id,
        ];

        try {
            Appointment::create(array_merge($validated, $appoint_data));
            session()->flash('success', 'Appointment Added Successfully');
            $trainer->notify(new EmailNotification($data));
            session()->flash('success', 'An Email has been sent to ' . $trainer->name);
            return redirect(route('main'));
        } catch (Exception $e) {
            return session()->flash('error', $e->getMessage());
        }
    }
}
