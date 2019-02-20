<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('xid');

            $table->string('name');
            $table->text('description');

            $table->integer('award_id')->unsigned();
            //$table->foreign('award_id')->reference('id')->on('awards');

            $table->integer('wing_id')->unsigned();
            //$table->foreign('wing_id')->reference('id')->on('wings');

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
        Schema::dropIfExists('roles');
    }
}
