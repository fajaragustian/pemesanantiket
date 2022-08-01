<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik',16);
            $table->string('nohp');
            $table->unsignedBigInteger('wisata_id');
            $table->date('tglkunjungan');
            $table->string('dewasa');
            $table->string('anak')->nullable();
            $table->unsignedBigInteger('daftar_harga_id');
            $table->string('totbay');
            $table->timestamps();
            $table->foreign('daftar_harga_id')->references('id')->on('daftar_harga')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('wisata_id')->references('id')->on('wisata')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasi');
    }
}
