<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ivent_id');
            $table->unsignedBigInteger('buddy_user_id');
            $table->Integer('status');
            $table->text('appeal');
            $table->timestamps();

            $table->foreign('ivent_id')
                ->references('id')
                ->on('ivents')
                ->onDelete('cascade');

            $table->foreign('buddy_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matchings');
    }
}
