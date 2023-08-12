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
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gambar');
            $table->string('judul');
            $table->string('penulis');
            $table->integer('isbn');
            $table->string('ringkasan');
            $table->integer('stok');
            $table->integer('harga');
            $table->string('tahun');
            $table->string('edisi');
            $table->string('penerbit');
            $table->string('halaman');
            $table->string('kategori');
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
        Schema::dropIfExists('books');
    }
};
