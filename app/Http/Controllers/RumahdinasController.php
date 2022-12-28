<?php

namespace App\Http\Controllers;

use App\Models\rumahRDP;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class RumahdinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //NO, ALAMAT_RDP, KOMPERTA, KELAS_RDP, TIPE_RDP, STATUS_RDP, KETERANGAN
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rumahRDP  $rumahRDP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rumahRDP $rumahRDP)
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
