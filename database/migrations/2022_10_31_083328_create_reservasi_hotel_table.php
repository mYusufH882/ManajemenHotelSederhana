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
        Schema::create('reservasi_hotel', function (Blueprint $table) {
            $table->id();
            $table->string('no_invoice');
            $table->integer('id_tamu');
            $table->integer('id_kamar');
            $table->integer('jumlah_tamu');
            $table->date('tgl_check_in');
            $table->date('tgl_check_out');
            $table->integer('total_harga');
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
        Schema::dropIfExists('reservasi_hotel');
    }
};
