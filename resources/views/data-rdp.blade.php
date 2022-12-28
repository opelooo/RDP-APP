@extends('layouts.dashboardT')

@section('title')
    Dashboard
@endsection

@section('header')
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search"
            aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Sign out</a>
            </div>
        </div>
    </header>
@endsection

@section('main')
    <div class="container-fluid">
        <div class="row">
            @include('components.navbar-base')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Data Rumah</h1>
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
                                <th scope="col">Alamat</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Tipe</th>
                                <th scope="col">Status</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($kumpulanRDP as $RDP)
                                <tr>
                                    <td>{{ $RDP->NO }}</td>
                                    <td>{{ $RDP->ALAMAT_RDP }}</td>
                                    <td>{{ $RDP->KELAS_RDP }}</td>
                                    <td>{{ $RDP->TIPE_RDP }}</td>
                                    <td>{{ $RDP->STATUS_RDP }}</td>
                                    <td>{{ $RDP->KETERANGAN }}</td>
                                    <td style="width: 100px">
                                        {{-- <form action="/dashboard/items/{{ $item->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf --}}
                                            <button class="badge bg-danger border-0 " onclick="return confirm('Are you sure?')"
                                                href="/data-rdp">Delete</button>
                                        {{-- </form> --}}
                                        <a href="/data-rdp/{{ $RDP->ALAMAT_RDP }}"
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
