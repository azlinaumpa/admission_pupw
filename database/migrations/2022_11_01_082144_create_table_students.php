<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('ic')->unique();
            $table->string('home')->nullable();
            $table->string('nation')->nullable();
            $table->string('pob')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->date('dob')->nullable();
            $table->string('marital')->nullable();
            $table->string('race')->nullable();
            $table->string('religion')->nullable();
            $table->string('add1')->nullable();
            $table->string('add2')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->string('state')->nullable();
            $table->string('nooku')->nullable();
            $table->string('okutype')->nullable();
            $table->string('role')->nullable();
            $table->string('app_status')->nullable();
            $table->string('intake')->nullable();
            $table->string('app_option')->nullable();
            $table->string('agent')->nullable();
            $table->string('offered_course')->nullable();
            $table->string('matric_no')->nullable();
            $table->string('passport')->nullable();
            $table->string('reason_rejected')->nullable();
            $table->string('remark_kiv')->nullable();
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
        Schema::dropIfExists('students');
    }
};
