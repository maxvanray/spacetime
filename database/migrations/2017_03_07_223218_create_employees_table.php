<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('email')->unique();


            $table->string('title');

            $table->string('phone');
            $table->string('phone2');

            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');



            $table->string('emergencycontact');
            $table->string('emergencycontactnumber');

            $table->mediumText('description');

            $table->date('hire_date');
            $table->date('created_by');

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
        Schema::dropIfExists('employees');
    }
}
