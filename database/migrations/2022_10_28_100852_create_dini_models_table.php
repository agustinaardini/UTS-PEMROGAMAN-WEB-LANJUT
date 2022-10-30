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
    public function up()
    {
        Schema::create('dini_models', function (Blueprint $table) {
            $table->id('no');
            $table->char('kode_barang');
            $table->string('nama_barang');
            $table->string('deskripsi');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dini_models');
    }
};
