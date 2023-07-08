<?php

namespace App\Http\Controllers;

use App\Models\MerkMobil;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $toyota = Mobil::where('merkmobil_id', '=', 1)->get();
        $daihatsu = Mobil::where('merkmobil_id', '=', 2)->get();
        $honda = Mobil::where('merkmobil_id', '=', 3)->get();
        $suzuki = Mobil::where('merkmobil_id', '=', 4)->get();
        $mitsubisi = Mobil::where('merkmobil_id', '=', 5)->get();
        $nissan = Mobil::where('merkmobil_id', '=', 6)->get();

        return view('user.mobil', [
            "title" => "Mobil",
            "toyota" => $toyota,
            "daihatsu" => $daihatsu,
            "honda" => $honda,
            "suzuki" => $suzuki,
            "mitsubisi" => $mitsubisi,
            "nissan" => $nissan
        ]);
    }

    public function navbar($merkmobil)
    {
        $merkMobil = MerkMobil::where('merk', $merkmobil)
            ->with('mobil')
            ->get();

        return view('user.mobil', [
            "title" => "Mobil",
            "merkMobil" => $merkMobil
        ]);
    }

    

    
}
