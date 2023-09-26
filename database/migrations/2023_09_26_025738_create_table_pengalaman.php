<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePengalaman extends Migration
{
    public function up()
    {
        Schema::create('pengalaman', function (Blueprint $table) {
            $table->increments('pengalaman_id');
            $table->string('nama',115);
            $table->string('jabatan',115);
            $table->text('deskripsi');
            $table->string('dari',115)->nullable();
            $table->string('sampai',115)->nullable();
        });
    }
}
