<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeHardwareTable extends Migration
{
    public function up()
    {
        Schema::create('employee_hardware', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id');
            $table->foreignId('hardware_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_hardware');
    }
}
