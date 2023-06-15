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
        Schema::create('lainnyas', function (Blueprint $table) {
            $table->id('id_lainnya');
            $table->string('nama_lainnya');
            $table->string('alamat_lainnya');
            $table->string('telp_lainnya');
            $table->string('deskripsi_lainnya');
            $table->date('tanggal_lainnya');
            $table->string('harga_lainnya');
            $table->string('image_lainnya');
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
        Schema::dropIfExists('lainnyas');
    }
};
