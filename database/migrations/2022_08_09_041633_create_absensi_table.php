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
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            // foreign key references
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('pertemuan_id');
            // foreign key references
            $table->foreign('pertemuan_id')
                    ->references('id')->on('pertemuan')
                    ->onDelete('cascade');
                    
            $table->string('nama_anggota');
            $table->string('nim');
            $table->string('kehadiran');
            // $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi');
    }
};
