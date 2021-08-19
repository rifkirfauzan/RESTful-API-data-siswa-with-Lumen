<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siswa extends Migration{
    
    public function up(){
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->integer('kelas');
            $table->integer('jurusan');
            $table->string('alamat');
            $table->integer('no_telp');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('siswa');
    }
}