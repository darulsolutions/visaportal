<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_details', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('file_id');
            $table->string('name',100);
            $table->string('father_name',100);
            $table->string('cnic',20);
            $table->string('address',250);
            $table->string('district',100);
            $table->string('dob',20);
            $table->string('pob',20);
            $table->string('passport',50);
            $table->string('doi',20);
            $table->string('poi',20);
            $table->string('doe',20);
            $table->string('province',50);
            $table->string('contract_period',50);
            $table->unsignedInteger('category_id');
            $table->decimal('salary',13,2);
            $table->enum('salary_unit',array('Monthly','Daily','Wages'));
            $table->string('permission_number',50);
            $table->date('date');

            $table->string('employer_name',100);
            $table->unsignedInteger('employer_city_id');
            $table->string('nomination_name',100);
            $table->string('nomination_cnic',100);
            $table->string('relation',20);
            $table->string('kd_number',20);
            $table->date('emp_date');

            $table->string('husband',20);
            $table->string('religion',20);
            $table->string('marital',20);
            $table->string('nationality',20);
            $table->string('sex',20);

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
        Schema::dropIfExists('employee_details');
    }
}
