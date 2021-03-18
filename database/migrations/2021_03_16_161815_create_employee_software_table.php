<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeSoftwareTable extends Migration
{
    public function up()
    {
        Schema::create('employee_software', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id');
            $table->foreignId('software_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_software');
    }
}
