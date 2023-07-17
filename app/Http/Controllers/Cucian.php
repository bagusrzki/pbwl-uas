<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Resi;

class Cucian extends Controller
{
    public function addCucian(){
        return view('add_cucian');
    }

    public function saveCucian(Request $r){
        $berat = $r->berat;
        $pelanggan = Pelanggan::create([
            'user_id' => Auth::user()->id,
            'nama' => $r->nama_pel,
            'no_hp' => $r->hp_pel,
            'alamat' => $r->alamat_pel
        ]);

        $newUserId = $pelanggan->id;

        $pesanan = Resi::create([
            'user_id' => Auth::user()->id,
            'pelanggan_id' => $newUserId,
            'berat_pakaian' => $berat,
            'total' => (int)$berat * 2000
        ]);
        return redirect('/');
    }

    public function editCucian($id){
        $cucian = Resi::where('id', $id)->first();
        return view('edit_cucian', [
            'cucian' => $cucian
        ]);
    }

    public function updateCucian(Request $r){
        $resi = Resi::where('id', $r->id)->first();
        $pelanggan = Pelanggan::where('id', $resi->pelanggan->id)->first();

        $resi->berat_pakaian = $r->berat;
        $resi->save();

        $pelanggan->nama = $r->nama_pel;
        $pelanggan->no_hp = $r->hp_pel;
        $pelanggan->alamat = $r->alamat_pel;
        $pelanggan->save();

        return redirect('/');
    }

    public function deleteCucian($id){
        $cucian = Resi::where('id', $id)->first();
        return view('delete_cucian', [
            'cucian' => $cucian
        ]);
    }

    public function destroyCucian(Request $r){
        $resi = Resi::where('id', $r->id)->first();
        $pelanggan = Pelanggan::where('id', $resi->pelanggan->id)->first();

        $resi->delete();
        $pelanggan->delete();

        return redirect('/');
    }
}
