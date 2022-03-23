<?php

namespace App\Http\Livewire\Admin\Dashboard\Trainers;

use App\Models\Trainer;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $trainers = Trainer::latest()->paginate(6);
        return view('livewire.admin.dashboard.trainers.index')
        ->with(['trainers' => $trainers])
        ->extends('layouts.dashboard')
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
            return session()->flash('success','Deleted Successfully');

        }return session()->flash('error','Something went wrong');
    }
}
