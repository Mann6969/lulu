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
        Schema::table('blogs', function (Blueprint $table) {
            // $table->string('title');
            // $table->string('subtitle');
            // $table->string('slug');
            // $table->string('body');
            // $table->tinyInteger('status');
            // $table->bigInteger('posted_by');
            // $table->string('image');
            // // $table->string('title');
            // $table->string('meta_key')->nullable();
            // $table->string('meta_discription')->nullable();
            $table->unsignedBigInteger('cid');
            $table->foreign('cid')->references('id')->on('blog_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            //
        });
    }
};
