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
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('ic')->unique();
            $table->string('p1_name')->nullable();
            $table->string('p1_ic')->nullable();
            $table->string('p1_nation')->nullable();
            $table->string('p1_email')->nullable();
            $table->string('p1_phone')->nullable();
            $table->string('p1_marital')->nullable();
            $table->string('p1_race')->nullable();
            $table->string('p1_religion')->nullable();
            $table->string('p1_relation')->nullable();
            $table->string('p1_nooku')->nullable();
            $table->string('p1_income')->nullable();
            $table->string('p2_name')->nullable();
            $table->string('p2_ic')->nullable();
            $table->string('p2_nation')->nullable();
            $table->string('p2_email')->nullable();
            $table->string('p2_phone')->nullable();
            $table->string('p2_marital')->nullable();
            $table->string('p2_race')->nullable();
            $table->string('p2_religion')->nullable();
            $table->string('p2_relation')->nullable();
            $table->string('p2_nooku')->nullable();
            $table->string('p2_income')->nullable();
            $table->string('household')->nullable();
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
        Schema::dropIfExists('parents');
    }
};
