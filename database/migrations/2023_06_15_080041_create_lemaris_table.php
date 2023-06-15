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
        Schema::create('lemaris', function (Blueprint $table) {
            $table->id('id_lemari');
            $table->string('nama_lemari');
            $table->string('alamat_lemari');
            $table->string('telp_lemari');
            $table->string('deskripsi_lemari');
            $table->date('tanggal_lemari');
            $table->string('harga_lemari');
            $table->string('image_lemari');
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
        Schema::dropIfExists('lemaris');
    }
};
