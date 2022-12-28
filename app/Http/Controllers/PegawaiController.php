<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use App\Http\Requests\StorepegawaiRequest;
use App\Http\Requests\UpdatepegawaiRequest;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data-pegawai', [
            'kumpulanPeg' => pegawai::all()
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
     * @param  \App\Http\Requests\StorepegawaiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepegawaiRequest $request)
    {
        $validated = $request->validate([
            'ALAMAT_RDP'=>'required',
            'KOMPERTA'=>'required',
            'KELAS_RDP'=>'required',
            'TIPE_RDP'=>'required',
            'STATUS_RDP'=>'required',
            'KETERANGAN'=>''
        ]);

        pegawai::create($validated);

        return redirect('/data-rdp')->with('success', 'New data has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(pegawai $pegawai)
    {
        return view('admin.edit-pekerja', [
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepegawaiRequest  $request
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepegawaiRequest $request, pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(pegawai $pegawai)
    {
        //
    }
}
