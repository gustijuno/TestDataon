<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePendidikan extends Migration
{
    public function up()
    {
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',115);
            $table->string('jurusan',115);
            $table->text('deskripsi');
            $table->datetime('dari');
            $table->datetime('sampai');
        });
    }
}
