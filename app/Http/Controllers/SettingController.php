<?php

namespace App\Http\Controllers;

use App\Models\JenisPart;
use App\Models\MerkMobil;
use App\Models\Mobil;
use App\Models\Sparepart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SettingController extends Controller
{
    public function index()
    {
        return view('admin.home', [
            "title" => "Setting"
        ]);
    }

    public function control()
    {
        return view('admin.setting', [
            "title" => "Setting"
        ]);
    }

    //mobil
    public function datamobil()
    {
        $mobil = Mobil::all();

        return view('admin.datamobil', [
            "title" => "Data Mobil",
            "mobil" => $mobil
        ]);
    }

    public function mobiledit($id)
    {
        $mobilall = MerkMobil::all();
        $mobil = Mobil::where('id', $id)->get()->first();
        // dd($mobil);

        return view('admin.editmobil', [
            "title" => "Edit Mobil",
            "mobilall" => $mobilall,
            "mobil" => $mobil
        ]);
    }

    public function create()
    {
        $mobil = MerkMobil::all();

        return view('admin.tambahmobil', [
            "title" => "Add Mobil",
            "mobil" => $mobil
        ]);
    }

    public function store(Request $request)
    {
        // ddd($request);
        $validatedData = $request->validate([
            'mobil' => ['required'],
            'merk_mobil_id' => ['required'],
            'image' => ['required']
        ]);

        $validatedData['image'] = $request->file('image')->store('mobil');

        Mobil::create($validatedData);

        return redirect('/datamobil')->with('success', '');
    }

    public function deletemobil($id)
    {
        $data = Mobil::find($id);

        if ($data->image) {
            Storage::delete($data->image);
        }

        $spareparts = Sparepart::where('mobil_id', $id)->get();

        foreach ($spareparts as $sparepart) {
            if ($sparepart->image) {
                Storage::delete($sparepart->image);
            }
        }
    
        Sparepart::where('mobil_id', $id)->delete();

        Mobil::destroy($data->id);
        return redirect('/datamobil')->with('success', 'Relawan sudah berhasil dihapus');
    }

    //sparepart
    public function sparepart()
    {
        $mobil = Sparepart::all();

        return view('admin.datasparepart', [
            "title" => "Data Mobil",
            "mobil" => $mobil
        ]);
    }

    public function editpart($id)
    {
        $allmobil = Mobil::all();
        $allpart = JenisPart::all();
        $mobil = Sparepart::where('id', $id)->get()->first();

        return view('admin.editpart', [
            "title" => "Edit Mobil",
            "allmobil" => $allmobil,
            "allpart" => $allpart,
            "mobil" => $mobil
        ]);
    }

    public function updatepart($id, Request $request)
    {
        Sparepart::all();

        $validatedData = $request->validate([
            'mobil_id' => ['required'],
            'jenispart_id' => ['required'],
            'nama' => ['required'],
            'merek' => ['required'],
            'harga' => ['required'],
            'detail' => ['required'],
            'image' => ['']
        ]);

        $mobil = Sparepart::where('id', $id)->first()->update($validatedData);
        if ($mobil) {
            return redirect('/sparepart')->with('success', 'Data has been updated!');
        }

    }

    public function addpart()
    {
        $merk = MerkMobil::all();
        $mobil = Mobil::all();
        $part = JenisPart::all();

        return view('admin.tambahpart', [
            "title" => "Tambah Mobil",
            "mobil" => $mobil,
            "part" => $part,
            "merk" => $merk
        ]);
    }

    

    public function tambah(Request $request)
    {
        $request->merge([
            'harga' => str_replace(['Rp.', '.'], '', $request->harga)
        ]);

        $validatedData = $request->validate([
            'mobil_id' => ['required'],
            'jenispart_id' => ['required'],
            'nama' => ['required'],
            'merek' => ['required'],
            'harga' => ['required'],
            'detail' => ['required'],
            'image' => ['required']
        ]);

        $validatedData['image'] = $request->file('image')->store('sparepart');

        Sparepart::create($validatedData);

        return redirect('/sparepart')->with('success', '');

    }

    public function deletepart($id)
    {
        $data = Sparepart::find($id);

        if ($data->image) {
            Storage::delete($data->image);
        }

        Sparepart::destroy($data->id);
        return redirect('/sparepart')->with('success', 'Relawan sudah berhasil dihapus');
    }

    //user
    public function user()
    {
        $user = User::all();

        return view('admin.datauser', [
            "title" => "Data Mobil",
            "user" => $user
        ]);
    }

    public function deleteuser($id)
    {
        $user = User::find($id);

        User::destroy($user->id);
        return redirect('/datauser')->with('success', 'Relawan sudah berhasil dihapus');
    }

}
