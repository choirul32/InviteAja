<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export (1.5.0)
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateInvitationInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitation_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('permalink', 191)->nullable();
            $table->bigInteger('templates_id')->unsigned();
            $table->foreign('templates_id')->references('id')->on('templates')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->nullableTimestamps();
        });     

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitation_infos');
    }
}
