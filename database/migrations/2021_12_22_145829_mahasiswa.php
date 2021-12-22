<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->char('nbi',10);
            $table->string('nama',20);
            $table->string('alamat',50);
            $table->date('tgl_lahir');
            $table->string('email',30);
            $table->string('no_telp',15);
            $table->string('prodi',25);
            $table->string('fakultas',25);
            $table->double('ipk');
            $table->char('dosen_wali',10);
            $table->string('foto',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mahasiswa');
    }
}
