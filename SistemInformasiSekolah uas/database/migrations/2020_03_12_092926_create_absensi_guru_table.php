<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_guru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal');
            
            // Establishing Relationship with 'guru' table
            $table->unsignedBigInteger('guru_id');
            $table->foreign('guru_id')->references('id')->on('guru');

            $table->integer('kehadiran_id');
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
        Schema::dropIfExists('absensi_guru');
    }
}
