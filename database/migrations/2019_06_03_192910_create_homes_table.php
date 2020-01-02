<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('men_nick_name', 191);
            $table->string('woman_nick_name', 191);
            $table->string('title', 191);
            $table->bigInteger('infos_id')->unsigned();
            $table->foreign('infos_id')->references('id')->on('invitation_infos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            // $table->string('date', 191);
            // $table->string('address', 191);

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
        Schema::dropIfExists('homes');
    }
}
