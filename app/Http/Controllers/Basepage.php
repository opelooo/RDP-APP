<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Basepage extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        return view('dashboard');
    }
}
