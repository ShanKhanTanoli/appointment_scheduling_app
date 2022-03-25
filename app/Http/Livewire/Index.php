<?php

namespace App\Http\Livewire;

use App\Models\Site;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $site;
    public $site_id;

    public function render()
    {
        $sites = Site::latest()->paginate(6);
        return view('livewire.index')
            ->with(['sites' => $sites, 'site' => $this->site])
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
        $this->site = Site::find($id);
        if ($this->site) {
            $this->emit('site', $this->site);
        } else {
            return session()->flash('error', 'Something went wrong');
        }
    }
}
