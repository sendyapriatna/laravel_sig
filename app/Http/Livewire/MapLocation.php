<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;

class MapLocation extends Component
{

    public function render()
    {
        return view('livewire.map-location', [
            'location_tables' => Location::orderBy('id', 'desc')->get()
        ]);
    }
    public function dashboard()
    {
        return view('livewire.get-location');
    }
}
