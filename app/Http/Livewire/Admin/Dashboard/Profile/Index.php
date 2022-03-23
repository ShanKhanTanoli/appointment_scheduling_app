<?php

namespace App\Http\Livewire\Admin\Dashboard\Profile;

use Exception;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $name,$email;

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function render()
    {
        return view('livewire.admin.dashboard.profile.index')
        ->extends('layouts.dashboard')
        ->section('content');
    }

    public function UpdateProfile()
    {
        $validated = $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,'.Auth::user()->id,
        ]);

        try{
            Auth::user()->update($validated);
            session()->flash('success','Profile Updated Successfully');
        }catch(Exception $e){
            return session()->flash('error',$e->getMessage());
        }
    }
}
