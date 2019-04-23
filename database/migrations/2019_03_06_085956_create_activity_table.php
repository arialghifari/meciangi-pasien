<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nama_relawan');
            // $table->foreign('nama_relawan')->references('name')->on('users');

            $table->string('action', 20);

            $table->string('nama_pasien');
            // $table->foreign('nama_pasien')->references('nama')->on('pasien');
            
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
        // Schema::dropIfExists('activity');
        // $table->dropForeign(['nama_relawan', 'nama_pasien']);
    }
}
