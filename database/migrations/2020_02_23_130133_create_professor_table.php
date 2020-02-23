<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor', function (Blueprint $table) {
            $table->bigIncrements('professor_id');
            $table->string("professor_university");
            $table->string("professor_name");
            $table->string("professor_email");
            $table->string("professor_phone");
            $table->string("professor_researchinterest");
            $table->string("professor_disciplines");
            $table->string("professor_subdisciplines");
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
        Schema::dropIfExists('professor');
    }
}
