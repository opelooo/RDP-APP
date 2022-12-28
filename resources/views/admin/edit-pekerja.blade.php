@extends('layouts.dashboardT')

@section('title')
    Edit Data
@endsection

@section('main')
    <div class="container-fluid">
        <div class="row">
            @include('components.navbar-base')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Edit Data</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                    </div>
                </div>

                <form class="my-3" method="post" action="/dashboard/items/{{ $pegawai->NO_PEKERJA }}">
                    @method('put')
                    @csrf
                    <div class="d-flex">
                        <div class="mb-3 flex-fill mx-2">
                            <label for="NAMA_PEKERJA" class="form-label">Nama Pekerja</label>
                            <input type="text" class="form-control @error('NAMA_PEKERJA') is-invalid @enderror" name="NAMA_PEKERJA"
                                id="NAMA_PEKERJA" placeholder="" value="{{ old('NAMA_PEKERJA', $pegawai->NAMA_PEKERJA) }}" autofocus
                                required>
                            @error('NAMA_PEKERJA')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 flex-fill mx-2">
                            <label for="NO_PEKERJA" class="form-label">No Pekerja</label>
                            <input type="text" class="form-control @error('NO_PEKERJA') is-invalid @enderror" name="NO_PEKERJA"
                                id="NO_PEKERJA" placeholder="" value="{{ old('NO_PEKERJA', $pegawai->NO_PEKERJA) }}" required>
                            @error('NO_PEKERJA')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 flex-fill mx-2">
                            <label for="NOPEK_PTKPI" class="form-label">NOPEK_PTKPI</label>
                            <input type="text" class="form-control @error('NOPEK_PTKPI') is-invalid @enderror" name="NOPEK_PTKPI"
                                id="NOPEK_PTKPI" placeholder="" value="{{ old('NOPEK_PTKPI', $pegawai->NOPEK_PTKPI) }}" required>
                            @error('NOPEK_PTKPI')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div class="mb-3 mx-2">
                            <label for="JABATAN" class="form-label">Jabatan</label>
                            <input class="form-control @error('JABATAN') is-invalid @enderror" name="JABATAN" type="text"
                                placeholder="" id="JABATAN" value="{{ old('JABATAN', $pegawai->JABATAN) }}" required>
                            @error('JABATAN')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 mx-2">
                            <label for="FUNGSI" class="form-label">Fungsi</label>
                            <input type="text" class="form-control @error('FUNGSI') is-invalid @enderror" name="FUNGSI"
                                id="FUNGSI" placeholder="" value="{{ old('FUNGSI', $pegawai->FUNGSI) }}" required>
                            @error('FUNGSI')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex">
                            <div class="mb-3 mx-2 flex-fill">
                                <label for="BAGIAN" class="form-label">Bagian</label>
                                <input type="text" class="form-control @error('BAGIAN') is-invalid @enderror" name="BAGIAN"
                                    id="BAGIAN" placeholder="" value="{{ old('BAGIAN', $pegawai->BAGIAN) }}" required>
                                @error('BAGIAN')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- <div class="mb-3 mx-2 flex-fill">
                                <label for="PRL" class="form-label">PRL</label>
                                <select type="text" class="form-select" name="type" id="type">
                                    @foreach (['TWS', 'Headset', 'Speaker', 'Wreless Headphone', 'Sound Card', 'Kable', 'IEM', 'DAC', 'Mic', 'Eartips'] as $category)
                                        @if (old('type', $item->type) == $category)
                                            <option value="{{ $category }}" selected>{{ $category }}</option>
                                        @else
                                            <option value="{{ $category }}">{{ $category }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div> --}}
                        </div>
                        <div class="d-flex">
                            <div class="mb-3 mx-2">
                                <label for="STATUS" class="form-label">Status</label>
                                <input type="text" class="form-control @error('STATUS') is-invalid @enderror" name="STATUS"
                                    id="STATUS" placeholder="" value="{{ old('STATUS', $pegawai->STATUS) }}" required>
                                @error('STATUS')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 mx-2 flex-fill">
                                <label for="PRL" class="form-label">PRL</label>
                                <input type="text" class="form-control @error('PRL') is-invalid @enderror" name="PRL"
                                    id="PRL" placeholder="" value="{{ old('PRL', $pegawai->PRL) }}" required>
                                @error('PRL')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mb-3 mx-2">
                                <label for="TGL_AKTIF" class="form-label">Tanggal Aktif</label>
                                <input id="TGL_AKTIF" type="date" name="TGL_AKTIF" class="form-control tglAktif"
                                    value="{{ old('review', $pegawai->TGL_AKTIF) }}">
                                @error('TGL_AKTIF')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 mx-2">
                                <label for="TGL_LAHIR" class="form-label">Tanggal Lahir</label>
                                <input id="TGL_LAHIR" type="date" name="TGL_LAHIR" class="form-control tglLahir"
                                    value="{{ old('TGL_LAHIR', $pegawai->TGL_LAHIR) }}">
                                @error('TGL_LAHIR')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mx-2">
                        <button type="submit" class="btn primary-btn bg-warning" style="width: 100px;">Oke</button>
                        <a href="/data-pegawai" type="submit" class="btn primary-btn bg-primary text-white mx-2"
                            style="width: 100px;">Batal</a>
                    </div>
                </form>


            </main>
        </div>
    </div>
@endsection

