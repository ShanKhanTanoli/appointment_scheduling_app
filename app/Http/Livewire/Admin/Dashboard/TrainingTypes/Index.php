<?php

namespace App\Http\Livewire\Admin\Dashboard\TrainingTypes;

use Livewire\Component;
use App\Models\TrainingType;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $types = TrainingType::latest()->paginate(6);
        return view('livewire.admin.dashboard.training-types.index')
            ->with(['types' => $types])
            ->extends('layouts.dashboard')
            ->section('content');
    }

    public function Edit($id)
    {
        if ($type = TrainingType::find($id)) {
            return redirect(route('AdminEditTrainingType', $type->slug));
        }
        return session()->flash('error', 'Something went wrong');
    }

    public function Delete($id)
    {
        if ($type = TrainingType::find($id)) {

            $type->delete();
            return session()->flash('success', 'Deleted Successfully');
        }
        return session()->flash('error', 'Something went wrong');
    }
}
