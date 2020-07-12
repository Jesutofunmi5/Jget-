<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTeacherIdColumnToClassarmSubjectPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('classarm_subject', function (Blueprint $table) {
            $table->integer('teacher_id')->unsigned();
            $table->integer('session');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classarm_subject', function (Blueprint $table) {
            $table->dropcolumn(['teacher_id', 'session']);
        });
    }
}
