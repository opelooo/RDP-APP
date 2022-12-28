<?php

namespace App\Http\Controllers;

use App\Models\rumahRDP;
use App\Http\Requests\StorerumahRDPRequest;
use App\Http\Requests\UpdaterumahRDPRequest;

class RumahRDPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data-rdp', [
            'kumpulanRDP' => rumahRDP::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorerumahRDPRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerumahRDPRequest $request)
    {
        $validated = $request->validate([
            'ALAMAT_RDP'=>'required',
            'KOMPERTA'=>'required',
            'KELAS_RDP'=>'required',
            'TIPE_RDP'=>'required',
            'STATUS_RDP'=>'required',
            'KETERANGAN'=>''
        ]);

        rumahRDP::create($validated);

        return redirect('/data-rdp')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rumahRDP  $rumahRDP
     * @return \Illuminate\Http\Response
     */
    public function show(rumahRDP $rumahRDP)
    {
        return view('admin.edit-rdp', [
            'rumah' => $rumahRDP
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rumahRDP  $rumahRDP
     * @return \Illuminate\Http\Response
     */
    public function edit(rumahRDP $rumahRDP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterumahRDPRequest  $request
     * @param  \App\Models\rumahRDP  $rumahRDP
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterumahRDPRequest $request, rumahRDP $rumahRDP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rumahRDP  $rumahRDP
     * @return \Illuminate\Http\Response
     */
    public function destroy(rumahRDP $rumahRDP)
    {
        //
    }
}
