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
        Schema::create('matkul', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100)->nullable();
            $table->string('singkatan', 10)->nullable();
            $table->string('hari', 20)->nullable();
            $table->string('jam', 20)->nullable();
            $table->string('dosen', 50)->nullable();
            $table->integer('totalJam')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matkul');
    }
};
