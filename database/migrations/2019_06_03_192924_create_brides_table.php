<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBridesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('intro', 191);
            $table->string('men_profil_url', 191);
            $table->string('men_long_name', 191);
            $table->string('men_parents_name', 191);
            $table->string('women_profil_url', 191);
            $table->string('women_long_name', 191);
            $table->string('women_parents_name', 191);
            $table->string('outro', 191);
            

            $table->bigInteger('infos_id')->unsigned();
            $table->foreign('infos_id')->references('id')->on('invitation_infos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brides');
    }
}
