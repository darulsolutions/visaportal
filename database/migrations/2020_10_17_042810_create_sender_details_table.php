<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sender_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('file_id')->unsigned();
            $table->string('name',100);
            $table->string('nationality',20);
            $table->string('mobile_number',20);
            $table->integer('city_id')->unsigned();
            $table->enum('type',array('Processing','Recruitment'));
            $table->decimal('amount',13,2);
            $table->string('other_expense',100);
            $table->string('other_details',100);
            $table->string('permission_number',50);
            $table->date('permission_date',50);
            $table->timestamps();

            // $table->foreign('fl_det_id')
            // ->references('fl_det_id')->on('file_details')
            // ->onDelete('no action')
            // ->onUpdate('no action');

            // $table->foreign('cty_id')
            // ->references('cty_id')->on('cities')
            // ->onDelete('no action')
            // ->onUpdate('no action');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sender_details');
    }
}
