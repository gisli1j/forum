<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKommentumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kommentum', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body');
            $table->unsignedInteger('nem_id');
            $table->foreign('nem_id')->references('id')->on('neme');
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
        Schema::dropIfExists('kommentum');
        return $this->belongsTo('body');
    }
}
