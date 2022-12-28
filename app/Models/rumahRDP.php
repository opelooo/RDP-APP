<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rumahRDP extends Model
{
    use HasFactory;
    protected $table = 'rumah_dinas';
    protected $guarded = ['NO'];

    public function pegawai()
    {
        return $this->belongsToMany(rumahRDP::class);
    }
}
