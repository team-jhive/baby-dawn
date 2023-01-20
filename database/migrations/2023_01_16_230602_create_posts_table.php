<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('hospital_name');
            $table->string('doctor_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('address');
            $table->string('time_of_birth');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('image');
            $table->string('weight');
            $table->string('height');
            $table->string('head_size');
            $table->string('blood_group');
            $table->string('genotype');
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
        Schema::dropIfExists('posts');
    }
}
