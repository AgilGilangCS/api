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
        Schema::create('mejas', function (Blueprint $table) {
            $table->id('id_meja');
            $table->string('nama_meja');
            $table->string('alamat_meja');
            $table->string('telp_meja');
            $table->string('deskripsi_meja');
            $table->date('tanggal_meja');
            $table->string('harga_meja');
            $table->string('image_meja');
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
        Schema::dropIfExists('mejas');
    }
};
