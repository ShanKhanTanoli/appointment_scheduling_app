<?php

namespace App\Http\Livewire;

use App\Models\Site;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $site_id;

    public function render()
    {
        $sites = Site::latest()->paginate(6);
        return view('livewire.index')
            ->with(['sites' => $sites])
            ->extends('layouts.auth')
            ->section('content');
    }

    public function ViewTrainers($id)
    {
        $site = Site::find($id);
        if ($site) {
            return redirect(route('viewtrainers', $site->slug));
        }
        return session()->flash('error', 'Something went wrong');
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
