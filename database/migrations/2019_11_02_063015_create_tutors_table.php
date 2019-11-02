<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('Contact_address')->nullable();
            $table->string('image', 4);
            $table->string('gender')->nullable();
            $table->unsignedInteger('university_id')->nullable();
            $table->unsignedInteger('degree_id')->nullable();
            $table->unsignedInteger('subject_id')->nullable();
        
            $table->string('status')->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->dropSoftDeletes();  //add this line
        });
    }
}
