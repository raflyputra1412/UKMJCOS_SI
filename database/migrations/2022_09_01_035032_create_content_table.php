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
        Schema::create('content', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('ringkasan');
            $table->text('deskripsi');
            $table->string('gambar');
            
            // foreign key references users id
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');

            // foreign key references jenis content id
            $table->unsignedBigInteger('jenis_content_id');
            $table->foreign('jenis_content_id')
                    ->references('id')->on('jenis_content')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('content');
    }
};
