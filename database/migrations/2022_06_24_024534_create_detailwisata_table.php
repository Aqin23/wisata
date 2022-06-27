<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailwisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailwisata', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_paketwisata')->constrained('paketwisata')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_paket');
            $table->string('harga');
            $table->text('desc');
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
        Schema::dropIfExists('detailwisata');
    }
}
