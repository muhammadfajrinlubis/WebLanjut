<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSikapTable extends Migration
{
    public function up()
    {
        Schema::create('sikap', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('guru_id');
            $table->unsignedBigInteger('mapel_id');
            $table->string('sikap_1', 5)->nullable();
            $table->string('sikap_2', 5)->nullable();
            $table->string('sikap_3', 5)->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('siswa_id')->references('id')->on('siswa');
            $table->foreign('kelas_id')->references('id')->on('kelas');
            $table->foreign('guru_id')->references('id')->on('guru');
            $table->foreign('mapel_id')->references('id')->on('mapel');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sikap');
    }
}
