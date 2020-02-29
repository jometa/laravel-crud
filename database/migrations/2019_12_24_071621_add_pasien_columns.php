<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPasienColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('pasien', function (Blueprint $table) {
            $table->string('alamat');
            $table->enum('jk', ['L', 'P']);
            $table->date('tanggal_lahir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('pasien', function (Blueprint $table) {
            $table->dropColumn('alamat');
            $table->dropColumn('jk');
            $table->dropColumn('tanggal_lahir');
        });
    }
}
