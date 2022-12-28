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

    protected $table = 'rumah_dinas';

    public function up()
    {
        Schema::create('rumah_dinas', function (Blueprint $table) {
            // `ALAMAT_RDP`, `KOMPERTA`, `KELAS_RDP`, `TIPE_RDP`, `STATUS_RDP`, `KETERANGAN`
            $table->id('NO');
            $table->string('ALAMAT_RDP')->unique();
            $table->string('KOMPERTA');
            $table->string('KELAS_RDP');
            $table->string('TIPE_RDP');
            $table->string('STATUS_RDP');
            $table->string('KETERANGAN')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rumah_dinas');
    }
};
