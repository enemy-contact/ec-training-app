<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_skill', function (Blueprint $table) {
            $table->integer('skill_id')->unsigned()->nullable();
            //$table->foreign('skill_id')->reference('id')->on('skills');
            
            $table->integer('role_id')->unsigned()->nullable();
            //$table->foreign('role_id')->reference('id')->on('roles');
            
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
        Schema::dropIfExists('role_skill');
    }
}
