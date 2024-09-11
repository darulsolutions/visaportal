<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_details', function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('file_id');
            $table->unsignedInteger('category_id');
            $table->string('job_title',50);
            $table->integer('total_visa');

            $table->decimal('salary',13,2);
            $table->enum('salary_unit',array('Monthly','Daily','Wages'));

            $table->enum('commision',array('Yes','No'));
            $table->string('commision_detail',100)->nullable()->default(null);

            $table->enum('overtime',array('Yes','No'));
            $table->string('overtime_detail',100)->nullable()->default(null);

            $table->text('contract_period');

            $table->enum('free_accommodation',array('Yes','No'));
            $table->string('free_accommodation_detail',100)->nullable()->default(null);

            $table->enum('free_food',array('Yes','No'));
            $table->string('free_food_detail',100)->nullable()->default(null);

            $table->string('working_place',100);
            $table->string('duty_time',100);

            $table->enum('other_benefits',array('Yes','No'));
            $table->string('other_benefits_detail',100)->nullable()->default(null);

            $table->enum('free_tickets',array('Yes','No'));
            $table->string('free_tickets_detail',100)->nullable()->default(null);

            $table->enum('medical_insurance',array('Yes','No'));
            $table->string('medical_insurance_detail',100)->nullable()->default(null);

            $table->enum('transportaion',array('Yes','No'));
            $table->string('transportaion_detail',100)->nullable()->default(null);

            // $table->integer('trade_catg_id');
            $table->timestamps();

            // $table->foreign('fl_det_id')
            // ->references('fl_det_id')->on('file_details')
            // ->onDelete('no action')
            // ->onUpdate('no action');

            // $table->foreign('trade_catg_id')
            // ->references('catg_id')->on('categories')
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
        Schema::dropIfExists('employment_details');
    }
}
