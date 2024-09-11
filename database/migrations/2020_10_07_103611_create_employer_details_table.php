<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employer_details', function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('file_id');
            $table->string('name',100);
            $table->text('ar_name');
            $table->enum('type',array('Private','Public'));
            $table->string('visa_number',50);
            $table->text('issue_date');
            // $table->string('waqala_deligation_number',50);
            $table->string('id_number',50);
            $table->unsignedInteger('city_id');
            $table->string('address',255);
            $table->string('fax_number',50);
            $table->string('mobile_number',20);
            $table->string('phone_number',20);
            $table->string('email', 100);
            // $table->unique(["email"],'unique_employer_details');
            $table->string('website',50);
            $table->timestamps();

            $table->foreign('file_id')
            ->references('id')->on('file_details')
            ->onDelete('no action')
            ->onUpdate('no action');
            //  $table->foreign('cty_id')
            //  ->references('cty_id')->on('cities')
            //  ->onDelete('no action')
            //  ->onUpdate('no action');

            // $table->foreign('addrs_id')
            // ->references('addrs_id')->on('addresses')
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
        Schema::dropIfExists('employer_details');
    }
}
