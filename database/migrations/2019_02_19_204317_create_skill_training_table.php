<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_training', function (Blueprint $table) {
                        
            $table->integer('skill_id')->unsigned()->nullable();
            //$table->foreign('skill_id')->reference('id')->on('skills')->onDelete('cascade');
            
            $table->integer('training_id')->unsigned()->nullable();
            //$table->foreign('training_id')->reference('id')->on('trainings')->onDelete('cascade');
            
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
        Schema::dropIfExists('skill_training');
    }
}
