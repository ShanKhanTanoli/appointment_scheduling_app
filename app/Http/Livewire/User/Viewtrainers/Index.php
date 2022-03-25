<?php

namespace App\Http\Livewire\User\Viewtrainers;

use Exception;
use App\Models\Site;
use App\Models\Trainer;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Str;

class Index extends Component
{
    public $site;
    public $site_id;
    public $trainers;

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
        return view('livewire.user.viewtrainers.index')
            ->with(['trainers' => $this->trainers, 'site' => $this->site])
            ->extends('layouts.auth')
            ->section('content');
    }

    public function MakeAppointment($id)
    {
        $site = Site::find($id);
        if ($site) {
            return redirect(route('MakeAppointment', $site->slug));
        } else {
            return session()->flash('error', 'Something went wrong');
        }
    }
}
