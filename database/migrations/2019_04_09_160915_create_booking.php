<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('id_booking');
            $table->date('tgl_booking');
            $table->time('waktu_booking');
            $table->string('uang_muka');
            $table->string('biaya_booking');
            $table->string('status');
            
            $table->unsignedbigInteger('tarif_id');
            $table->foreign('tarif_id')->references('id_tarif')->on('tarif')->onDelete('cascade');

            $table->unsignedbigInteger('member_id');
            $table->foreign('member_id')->references('id_member')->on('member')->onDelete('cascade');

            $table->unsignedbigInteger('lapangan_id');
            $table->foreign('lapangan_id')->references('id_lapangan')->on('lapangan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
