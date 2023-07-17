<?php

namespace App\Http\Controllers;

use App\Models\Resi;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreResiRequest;
use App\Http\Requests\UpdateResiRequest;

class ResiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allResi =  Resi::all();
        $resiCount = Resi::count();
        return view('resi', [
            'allResi' => $allResi,
            'user' => Auth::user(),
            'resi' => $resiCount
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Resi $resi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resi $resi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResiRequest $request, Resi $resi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resi $resi)
    {
        //
    }
}
