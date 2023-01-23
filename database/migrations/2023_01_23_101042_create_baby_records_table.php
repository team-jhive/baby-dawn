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
        Schema::create('baby_records', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Hospital::class);
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('hospital_name')->nullable();
            $table->string('doctor')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->double('weight')->default(0);
            $table->double('height')->default(0);
            $table->string('date_of_birth');
            $table->string('time_of_birth');
            $table->string('type_of_delivery');
            $table->boolean('is_alive')->default(1);
            $table->text('condition');
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
        Schema::dropIfExists('baby_records');
    }
};
