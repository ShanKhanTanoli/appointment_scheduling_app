<?php

namespace App\Http\Livewire\Admin\Dashboard\Site\Edit;

use Exception;
use App\Models\Site;
use Livewire\Component;

class Index extends Component
{
    public $EditSite;

    public $code;


    public function mount($slug)
    {
       $this->EditSite = Site::where('slug',$slug)
       ->first();
       if($this->EditSite){
        $this->code = $this->EditSite->code;
       }else{
        session()->flash('error','Something went wrong');
        return redirect(route('AdminSites')); 
       }
    }

    public function render()
    {
        return view('livewire.admin.dashboard.site.edit.index')
        ->extends('layouts.dashboard')
        ->with([$this->EditSite])
        ->section('content');
    }

    public function UpdateSite()
    {
        $validated = $this->validate([
            'code' => 'required',
        ]);
        try{
            $this->EditSite->update($validated);
            session()->flash('success','Site Updated Successfully');
        }catch(Exception $e){
            return session()->flash('error',$e->getMessage());
        }
    }
}
