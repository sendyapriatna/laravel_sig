<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class GetLocation extends Component
{
    public function render()
    {
        return view('livewire.get-location');
    }
    public function titik()
    {
        $result = DB::table('location_tables')->select('nama', 'latitude', 'longitude')->get();
        return json_encode($result);
    }
}
