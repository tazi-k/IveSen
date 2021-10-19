<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ivents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('draft_user_id');
            $table->string('ivent_name');
            $table->date('ivent_date');
            $table->integer('number_of_people');
            $table->text('message');
            $table->timestamps();

            $table->foreign('draft_user_id')
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
        Schema::dropIfExists('ivents');
    }
}
