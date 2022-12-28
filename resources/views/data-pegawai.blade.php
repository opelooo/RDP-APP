@extends('layouts.dashboardT')

@section('title')
    Dashboard
@endsection

@section('main')
    <div class="container-fluid">
        <div class="row">
            @include('components.navbar-base')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Data Pegawai</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                    </div>
                </div>

                <div class="table-responsive pb-lg-4" style="width: 100%">
                    <table class="table table-striped" id="table-pegawai" style="width: 100%">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">No Pekerja</th>
                                <th scope="col">NOPEK PTKPI</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kumpulanPeg as $pegawai)
                                <tr>
                                    <td>{{ $pegawai->NO }}</td>
                                    <td>{{ $pegawai->NAMA_PEKERJA }}</td>
                                    <td>{{ $pegawai->NO_PEKERJA }}</td>
                                    <td>{{ $pegawai->NOPEK_PTKPI }}</td>
                                    <td>{{ $pegawai->JABATAN }}</td>
                                    <td>{{ $pegawai->STATUS }}</td>
                                    <td style="width: 100px">
                                        {{-- <form action="/dashboard/items/{{ $item->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf --}}
                                            <button class="badge bg-danger border-0 " onclick="return confirm('Are you sure?')"
                                                href="/data-pegawai">Delete</button>
                                        {{-- </form> --}}
                                        <a href="/data-pegawai/{{ $pegawai->NO_PEKERJA }}"
                                            class="badge bg-warning border-0 text-black text-decoration-none">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection

@section('body-scripts')
    <script>
        $(document).ready(function() {
            $('#table-pegawai').DataTable();
        });
    </script>
@endsection
