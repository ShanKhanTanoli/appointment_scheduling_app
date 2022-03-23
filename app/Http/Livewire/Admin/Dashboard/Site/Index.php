<?php

namespace App\Http\Livewire\Admin\Dashboard\Site;

use App\Models\Site;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $sites = Site::latest()->paginate(6);
        return view('livewire.admin.dashboard.site.index')
        ->with(['sites' => $sites])
        ->extends('layouts.dashboard')
        ->section('content');
    }

    public function ViewTrainers($id)
    {
        if($site = Site::find($id)){
            return redirect(route('AdminSiteTrainers',$site->slug));
        }return session()->flash('error','Something went wrong');
    }

    public function Edit($id)
    {
        if($site = Site::find($id)){
            return redirect(route('AdminEditSite',$site->slug));
        }return session()->flash('error','Something went wrong');
    }

    public function Delete($id)
    {
        if($site = Site::find($id)){

            $site->delete();
            return session()->flash('success','Deleted Successfully');

        }return session()->flash('error','Something went wrong');
    }
}
