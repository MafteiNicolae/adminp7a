<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ap_id');
            $table->foreign('ap_id')->references('id')->on('apartaments');
            $table->integer('luna');
            $table->integer('an');
            $table->json('contoare');
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
        Schema::dropIfExists('contors');
    }
}
