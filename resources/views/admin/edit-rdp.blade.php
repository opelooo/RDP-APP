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

                <form class="my-3" method="post" action="/dashboard/items/{{ $rumah->TIPE_RDP }}">
                    @method('put')
                    @csrf
                    <div class="d-flex">
                        <div class="mb-3 flex-fill mx-2">
                            <label for="KELAS_RDP" class="form-label">Kelas</label>
                            <input type="text" class="form-control @error('KELAS_RDP') is-invalid @enderror" name="KELAS_RDP"
                                id="KELAS_RDP" placeholder="" value="{{ old('KELAS_RDP', $rumah->KELAS_RDP) }}" autofocus
                                required>
                            @error('KELAS_RDP')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 flex-fill mx-2">
                            <label for="TIPE_RDP" class="form-label">Tipe</label>
                            <input type="text" class="form-control @error('TIPE_RDP') is-invalid @enderror" name="TIPE_RDP"
                                id="TIPE_RDP" placeholder="" value="{{ old('TIPE_RDP', $rumah->TIPE_RDP) }}" required>
                            @error('TIPE_RDP')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 flex-fill mx-2">
                            <label for="STATUS_RDP" class="form-label">Status</label>
                            <input type="text" class="form-control @error('STATUS_RDP') is-invalid @enderror" name="STATUS_RDP"
                                id="STATUS_RDP" placeholder="" value="{{ old('STATUS_RDP', $rumah->STATUS_RDP) }}" required>
                            @error('STATUS_RDP')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div class="mb-3 mx-2">
                            <label for="ALAMAT_RDP" class="form-label">Alamat</label>
                            <input class="form-control @error('ALAMAT_RDP') is-invalid @enderror" name="ALAMAT_RDP" type="text"
                                placeholder="" id="ALAMAT_RDP" value="{{ old('ALAMAT_RDP', $rumah->ALAMAT_RDP) }}" required>
                            @error('ALAMAT_RDP')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 mx-2">
                            <label for="KOMPERTA" class="form-label">Komperta</label>
                            <input type="text" class="form-control @error('KOMPERTA') is-invalid @enderror" name="KOMPERTA"
                                id="KOMPERTA" placeholder="" value="{{ old('KOMPERTA', $rumah->KOMPERTA) }}" required>
                            @error('KOMPERTA')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex">
                            <div class="mb-3 mx-2 flex-fill">
                                <label for="KETERANGAN" class="form-label">Keterangan</label>
                                <input type="text" class="form-control @error('KETERANGAN') is-invalid @enderror" name="KETERANGAN"
                                    id="KETERANGAN" placeholder="" value="{{ old('KETERANGAN', $rumah->KETERANGAN) }}" required>
                                @error('KETERANGAN')
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
                        
                    <div class="d-flex mx-2">
                        <button type="submit" class="btn primary-btn bg-warning" style="width: 100px;">Oke</button>
                        <a href="/data-rdp" type="submit" class="btn primary-btn bg-primary text-white mx-2"
                            style="width: 100px;">Batal</a>
                    </div>
                </form>


            </main>
        </div>
    </div>
@endsection

