<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberAwardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_award', function (Blueprint $table) {
            
            $table->boolean('is_outdated');

            $table->integer('member_id')->unsigned()->nullable();
            //s$table->foreign('member_id')->reference('id')->on('members');
            
            $table->integer('award_id')->unsigned()->nullable();
            //$table->foreign('award_id')->reference('id')->on('awards');

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
        Schema::dropIfExists('member_award');
    }
}
