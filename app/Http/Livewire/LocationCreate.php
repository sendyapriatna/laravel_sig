<?php

namespace App\Http\Livewire;

use App\Models\Location;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class LocationCreate extends Component
{
    public $nama;
    public $latitude;
    public $longitude;

    public function render()
    {
        return view('livewire.location-create');
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required|string|min:5',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
        ]);

        Location::create([
            'nama' => $this->nama,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ]);

        $this->nama = NULL;
        $this->latitude = NULL;
        $this->longitude = NULL;

        session()->flash('success', 'Data Berhasil Ditambahkan!!');
    }
    public function load()
    {
        $test = DB::Location()->get();
        dd($test);
    }
}
