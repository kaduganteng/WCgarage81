<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventcmhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventcmh', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_event');
            $table->string('nama');
            $table->string('lokasi');
            $table->string('foto_event');
            $table->string('rinciankegiatan');
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
        Schema::dropIfExists('eventcmh');
    }
}
