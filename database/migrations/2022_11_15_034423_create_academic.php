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
        Schema::create('academic', function (Blueprint $table) {
            $table->id();
            $table->string('ic')->unique();
            $table->string('level')->nullable();
            $table->string('ipta')->nullable();
            $table->string('cgpa')->nullable();
            $table->string('muet')->nullable();
            $table->string('spm_number')->nullable();
            $table->string('spm_year')->nullable();
            $table->string('spm_aliran')->nullable();
            $table->string('school_type')->nullable();
            $table->string('school_name')->nullable();
            $table->string('exam_type')->nullable();
            $table->string('kodspm1')->nullable();
            $table->string('gredspm1')->nullable();
            $table->string('valuespm1')->nullable();
            $table->string('kodspm2')->nullable();
            $table->string('gredspm2')->nullable();
            $table->string('valuespm2')->nullable();
            $table->string('kodspm3')->nullable();
            $table->string('gredspm3')->nullable();
            $table->string('valuespm3')->nullable();
            $table->string('kodspm4')->nullable();
            $table->string('gredspm4')->nullable();
            $table->string('valuespm4')->nullable();
            $table->string('kodspm5')->nullable();
            $table->string('gredspm5')->nullable();
            $table->string('valuespm5')->nullable();
            $table->string('kodspm6')->nullable();
            $table->string('gredspm6')->nullable();
            $table->string('valuespm6')->nullable();
            $table->string('kodspm7')->nullable();
            $table->string('gredspm7')->nullable();
            $table->string('valuespm7')->nullable();
            $table->string('kodspm8')->nullable();
            $table->string('gredspm8')->nullable();
            $table->string('valuespm8')->nullable();
            $table->string('kodspm9')->nullable();
            $table->string('gredspm9')->nullable();
            $table->string('valuespm9')->nullable();
            $table->string('kodspm10')->nullable();
            $table->string('gredspm10')->nullable();
            $table->string('valuespm10')->nullable();
            $table->string('kodspm11')->nullable();
            $table->string('gredspm11')->nullable();
            $table->string('valuespm11')->nullable();
            $table->string('kodspm12')->nullable();
            $table->string('gredspm12')->nullable();
            $table->string('valuespm12')->nullable();
            $table->string('kodspm13')->nullable();
            $table->string('gredspm13')->nullable();
            $table->string('valuespm13')->nullable();
            $table->string('kodspm14')->nullable();
            $table->string('gredspm14')->nullable();
            $table->string('valuespm14')->nullable();
            $table->string('kodspm15')->nullable();
            $table->string('gredspm15')->nullable();
            $table->string('valuespm15')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('academic');
    }
};
