<?php

namespace App\Http\Livewire\Admin\Dashboard\Settings;

use App\Models\Setting;
use Livewire\Component;

class Index extends Component
{
    public $text_logo;

    public function mount()
    {
        $settings = Setting::first();

        if ($settings) {
            $this->text_logo = $settings->text_logo;
        } else {
            $this->text_logo = "Home";
        }
    }

    public function render()
    {
        return view('livewire.admin.dashboard.settings.index')
            ->extends('layouts.dashboard')
            ->section('content');
    }

    public function Update()
    {
        $msg = [
            'text_logo.required' => 'Enter Site Name',
            'text_logo.max' => 'Site Name should not be more than 10 characters',
        ];

        $validated = $this->validate([
            'text_logo' => 'required|string|max:10',
        ], $msg);

        $settings = Setting::first();

        if ($settings) {

            $settings->update($validated);

            return session()->flash('success', 'Settings updated successfully');
        } else {

            Setting::create($validated);
            return session()->flash('success', 'Settings updated successfully');
        }
    }
}
