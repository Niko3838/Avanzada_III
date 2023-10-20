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
        Schema::create('programa', function (Blueprint $table) {
            $table->string('codprograma',2);
            $table->char('nomprograma',100);
            $table->string('facultad',2);       
            $table->primary('codprograma');
            $table->foreign('facultad')->references('codfacultad')->on('facultad'); #llav franea
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
        Schema::dropIfExists('programa');
    }
};
