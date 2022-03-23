<?php

namespace App\Http\Livewire\Admin\Dashboard\Site\Trainers;

use App\Models\Site;
use App\Models\Trainer;
use Livewire\Component;

class Index extends Component
{
    public $SiteTrainers;

    public $trainers;


    public function mount($slug)
    {
        $this->SiteTrainers = Site::where('slug', $slug)
            ->first();

        if ($this->SiteTrainers) {

            $this->trainers = $this->SiteTrainers->trainers;

        } else {

            session()->flash('error', 'Something went wrong');
            return redirect(route('AdminSites'));
        }
    }

    public function render()
    {
        return view('livewire.admin.dashboard.site.trainers.index')
            ->extends('layouts.dashboard')
            ->with([$this->trainers])
            ->section('content');
    }

    public function Edit($id)
    {
        if($site = Trainer::find($id)){
            return redirect(route('AdminEditTrainer',$site->slug));
        }return session()->flash('error','Something went wrong');
    }

    public function Delete($id)
    {
        if($site = Trainer::find($id)){
            $site->delete();
            session()->flash('success','Deleted Successfully');
            return redirect(route('AdminSiteTrainers',$this->SiteTrainers->slug));
        }return session()->flash('error','Something went wrong');
    }
}
