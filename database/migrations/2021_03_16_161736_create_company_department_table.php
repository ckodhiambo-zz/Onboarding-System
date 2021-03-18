<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDepartmentTable extends Migration
{
    public function up()
    {
        Schema::create('company_department', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id');
            $table->foreignId('department_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('company_department');
    }
}
