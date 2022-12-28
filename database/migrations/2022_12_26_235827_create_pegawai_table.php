<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $table = 'pegawai';

    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id('NO');
            $table->string('NO_PEKERJA')->unique();
            $table->string('NOPEK_PTKPI')->unique();
            $table->string('NAMA_PEKERJA');
            $table->string('JABATAN');
            $table->string('FUNGSI');
            $table->string('BAGIAN');
            $table->string('PRL');
            $table->string('STATUS');
            $table->date('TGL_AKTIF');
            $table->date('TGL_LAHIR')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
};
