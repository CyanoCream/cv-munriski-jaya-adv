<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softdeletes();
            $table->biginteger('invoice');
            $table->string('nospk');
            $table->string('nama');
            $table->datetime('tanggal');
            $table->string('alamat');
            $table->string('provinsi')->nullable();
            $table->string('kota')->nullable();
            $table->integer('kodepos')->nullable();
            $table->string('npwp')->nullable();
            $table->string('pemberi_kerja')->nullable();
            $table->string('status_pembayaran')->default('belum');
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perusahaan');
    }
}
