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
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fathername');
            $table->string('mothername');
            $table->string('grandfathername')->nullable();
            $table->string('grandmothername')->nullable();
            $table->string('address');
            $table->string('occupation');
            $table->string('education')->nullable();
            $table->string('annualincome')->nullable();
            $table->string('rashi')->nullable();
            $table->string('nakshatra')->nullable();
            $table->string('religion');
            $table->string('caste');
            $table->string('subcaste')->nullable();
            $table->string('gotra');
            $table->string('manglik')->nullable();
            $table->string('img')->nullable();
            $table->date('dob');
            $table->bigInteger('phone');
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
        Schema::dropIfExists('biodata');
    }
};
