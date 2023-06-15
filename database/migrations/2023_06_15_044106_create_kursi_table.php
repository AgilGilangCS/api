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
        Schema::create('kursis', function (Blueprint $table) {
            $table->id('id_kursi');
            $table->string('nama_kursi');
            $table->string('alamat_kursi');
            $table->string('telp_kursi');
            $table->string('deskripsi_kursi');
            $table->date('tanggal_kursi');
            $table->string('harga_kursi');
            $table->string('image_kursi');
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
        Schema::dropIfExists('kursi');
    }
};
