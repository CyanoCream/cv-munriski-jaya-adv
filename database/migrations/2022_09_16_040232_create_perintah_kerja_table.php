<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerintahKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perintah_kerja', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('perusahaan_id')->unsigned();
            $table->foreign('perusahaan_id')->references('id')->on('perusahaan');
            $table->string('deskripsi');
            $table->integer('kuantitas');
            $table->char('harga_unit');
            $table->char('total');
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
        Schema::dropIfExists('perintah_kerja');
    }
}
