<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;

class MainDashboard extends Component
{
    public function render()
    {
        return view('livewire.main-dashboard', ['location_tables' => Location::orderBy('id', 'desc')->get()]);
    }
}
