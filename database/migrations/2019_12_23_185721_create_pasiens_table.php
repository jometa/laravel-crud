<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('nama');
            $table->string('rt_rw');
            $table->bigInteger('kelurahan_id')->unsigned();
            $table->timestamps();

            $table->foreign('kelurahan_id')
                ->references('id')
                ->on('kelurahan')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pasien', function (Blueprint $table) {
            $table->dropForeign(['kelurahan_id']);
        });
        Schema::dropIfExists('pasien');
    }
}
