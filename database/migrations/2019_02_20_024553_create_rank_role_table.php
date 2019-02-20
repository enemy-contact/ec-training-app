<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRankRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rank_role', function (Blueprint $table) {
            $table->integer('rank_id')->unsigned()->nullable();
            //$table->foreign('rank_id')->reference('id')->on('ranks');
            
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
        Schema::dropIfExists('rank_role');
    }
}
