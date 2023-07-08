<?php

namespace App\Http\Controllers;

use App\Models\MerkMobil;
use App\Models\Mobil;
use App\Models\JenisPart;
use App\Models\Sparepart;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        return view('user.home', [
            "title" => "Home"
        ]);
    }

    public function sparepart()
    {
        $mobilId = request()->segment(3);
        $mobil = Mobil::find($mobilId);

        // Pastikan mobil ditemukan sebelum melanjutkan
        if (!$mobil) {
            abort(404); // Tampilkan halaman 404 jika mobil tidak ditemukan
        }

        $merk = $mobil->merkMobil->merk;

        return view('user.sparepart', [
            "title" => "Sparepart",
            "mobil" => $mobil,
            "merkMobil" => $merk,
        ]);
    }

    public function merkpart($jenispart)
    {
        $jenis = request()->segment(6);
        $jenispart = JenisPart::find($jenis);

        // Pastikan jenispart ditemukan sebelum melanjutkan
        if (!$jenispart) {
            abort(404); // Tampilkan halaman 404 jika jenispart tidak ditemukan
        }

        $mobilId = request()->segment(3);
        $mobil = Mobil::find($mobilId);

        // Pastikan mobil ditemukan sebelum melanjutkan
        if (!$mobil) {
            abort(404); // Tampilkan halaman 404 jika mobil tidak ditemukan
        }

        $spareparts = Sparepart::where('jenispart_id', $jenispart->id)
            ->where('mobil_id', $mobil->id)
            ->get();
            
        return view('user.merkpart', [
            "title" => "Merk Sparepart",
            "jenispart" => $jenispart,
            "spareparts" => $spareparts,
            "mobil" => $mobil
        ]);
    }

    public function detail($id)
    {
        $part = request()->segment(8);
        $spareparts = Sparepart::find($part);

        return view('user.detailpart', [
            "title" => "Detail Sparepart",
            "sparepart" => $spareparts
        ]);
    }

    public function user()
    {
        return view('user.user', [
            "title" => "Info User"
        ]);
    }
}
