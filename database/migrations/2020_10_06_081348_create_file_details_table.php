<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_details', function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->tinyInteger('status_id')->unsigned();
            $table->timestamps();

            // $table->foreignId('country_id')->constrained();

            // $table->foreign('country_id')->references('id')->on('countries');
            //$table->foreignId('user_id');

            // $table->foreign('fl_det_cty_id')
            // ->references('cty_id')->on('cities');

            //$table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_details');
    }
}
