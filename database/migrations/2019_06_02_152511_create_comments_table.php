<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export (1.5.0)
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('guest_name', 191);
            $table->string('comment', 191);
            $table->bigInteger('infos_id')->unsigned();
            $table->foreign('infos_id')->references('id')->on('invitation_infos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->nullableTimestamps();

            

//             $table->foreign('user_id', 'comments_user_id_foreign')->references('id')->on('users')->onDelete('RESTRICT
// ')->onUpdate('RESTRICT');

        });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
