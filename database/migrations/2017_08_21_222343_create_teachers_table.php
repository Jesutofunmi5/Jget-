<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('staff_no')->unique();
            $table->string('qualification');
            $table->enum('gender',['Male', 'Female']);
            $table->string('password');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('passport')->default('/images/passports/no_img_da88a72526.gif');
            $table->string('address');
            $table->integer('session')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->integer('lga_id')->unsigned();
            $table->foreign('lga_id')->references('id')->on('lgas')->onDelete('cascade');
            $table->integer('school_id')->unsigned();
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->integer('house_id')->nullable();
            $table->foreign('house_id')->references('id')->on('student_houses')->onDelete('cascade');
            $table->string('next_of_kins');
            $table->string('next_of_kins_phone');
            $table->string('next_of_kins_email');
            $table->boolean('status');
            $table->string('next_of_kins_address');
            $table->string('extra_curricular_activites');
            $table->enum('health_status', ['Normal', 'Disable']);
            $table->text('health_status_desc');
            $table->rememberToken();
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
        Schema::drop('teachers');
    }
}
