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

        // 이름, 아이디, 비밀번호, 비밀번호 확인
        Schema::create('favorite_boards', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique;
            $table->string('password', 512);
            $table->string('name', 50);
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
