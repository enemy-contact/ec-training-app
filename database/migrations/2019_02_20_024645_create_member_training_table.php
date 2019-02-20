<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_training', function (Blueprint $table) {
            $table->integer('memeber_id')->unsigned()->nullable();
            //$table->foreign('memeber_id')->reference('id')->on('members');
            
            $table->integer('training_id')->unsigned()->nullable();
            //$table->foreign('training_id')->reference('id')->on('trainings');

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
        Schema::dropIfExists('member_training');
    }
}
