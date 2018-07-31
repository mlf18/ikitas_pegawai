<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSprintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sprints', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('deskripsi');
            $table->integer('backlog_id')->unsigned();
            $table->foreign('backlog_id')->references('id')->on('backlogs');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('status');
            $table->string('hasil');
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
        Schema::dropIfExists('sprints');
    }
}
