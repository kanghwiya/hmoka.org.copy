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

        // 보드 : 제목, 전시 시작일, 전시 종료일, 이미지, 전시개요, 주의사항
// , 전시 장소, 관람시간, 관람 나이, 금액, 전시연계교육(링크), MOKA VR TOUR
        Schema::create('boards', function (Blueprint $table) {
            $table->increments('board_id');
            $table->integer('user_id');
            $table->string('title', 100);
            $table->date('exhibition_start');
            $table->date('exhibition_end');
            $table->string('category_id', 2);
            $table->string('image');
            $table->string('content', 3000);
            $table->string('caution', 1000);
            $table->string('location', 1000);
            $table->datetime('opentime');
            $table->datetime('closetime');
            $table->integer('admission_fee');
            $table->string('link', 1000);
            $table->timestamps();
            $table->softDeletes();
        });
    }
// img 서버 폴더를 새로 만들어서 이미지 link를 불러오는 방식
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
