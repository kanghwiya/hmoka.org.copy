<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // user_id, board_id foriegn 키 연결
        Schema::create('favorite_boards', function (Blueprint $table) {
            $table->increments('favorite_boards_id');
            $table->integer('user_id');
            $table->integer('board_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorite_boards');
    }
};
