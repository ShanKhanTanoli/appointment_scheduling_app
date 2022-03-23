<?php

namespace App\Http\Livewire\Admin\Dashboard\Site\Add;

use App\Models\Site;
use Exception;
use Livewire\Component;
use Illuminate\Support\Str;

class Index extends Component
{
    public $site_name;

    public function render()
    {
        return view('livewire.admin.dashboard.site.add.index')
        ->extends('layouts.dashboard')
        ->section('content');
    }

    public function AddSite()
    {
        $validated = $this->validate([
            'site_name' => 'required',
        ]);

        try{
            Site::create([
                'code' => $validated['site_name'],
                'slug' => strtoupper(Str::random(20)),
            ]);
            session()->flash('success','Site Added Successfully');
            return redirect(route('AdminSites'));
        }catch(Exception $e){
            return session()->flash('error',$e->getMessage());
        }


    }
}
