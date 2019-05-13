<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('genre');
            $table->longtext('sinopsis');
            $table->string('pemain');
            $table->string('produser');
            $table->string('sutradara');
            $table->string('penulis');
            $table->string('produksi');
            $table->string('poster');
            $table->string('trailer');
            $table->integer('umur');
            $table->integer('rating');
            $table->integer('durasi');
            $table->date('jadwal');
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
        Schema::dropIfExists('movies');
    }
}
