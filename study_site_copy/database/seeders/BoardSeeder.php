<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // php artisan db:seed --class=CategorySeeder
    public function run()
    {
        DB::table('boards')->insert([
            ['user_id' => '1', 'title' => '전시제목입니다.', 'exhibition_start' => 20230930, 'exhibition_end' => 20231121,
            'category_id' => 1, 'image' => '/img/test1.jpg', 'content' => '전시내용입니다.', 'caution' => '사진 촬영이 불가능합니다.',
            'location' => '38118 경상북도 경주시 경감로 614(천군동 130) 솔거미술관', 'opentime' => 20231130100000, 'closetime' => 20231230180000,
            'admission_fee' => 3000, 'link' => 'link', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => now()],
            ['user_id' => '1', 'title' => '전시제목입니다.', 'exhibition_start' => 20230830, 'exhibition_end' => 20231012,
            'category_id' => 1, 'image' => '/img/test2.jpg', 'content' => '전시내용입니다.', 'caution' => '사진 촬영이 불가능합니다.',
            'location' => '38118 경상북도 경주시 경감로 614(천군동 130) 솔거미술관', 'opentime' => 20231130100000, 'closetime' => 20231230180000,
            'admission_fee' => 3000, 'link' => 'link', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => now()],
            ['user_id' => '1', 'title' => '전시제목입니다.', 'exhibition_start' => 20231101, 'exhibition_end' => 20231121,
            'category_id' => 1, 'image' => '/img/test3.jpg', 'content' => '전시내용입니다.', 'caution' => '사진 촬영이 불가능합니다.',
            'location' => '38118 경상북도 경주시 경감로 614(천군동 130) 솔거미술관', 'opentime' => 20231130100000, 'closetime' => 20231230180000,
            'admission_fee' => 3000, 'link' => 'link', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => now()],
            ['user_id' => '1', 'title' => '전시제목입니다.', 'exhibition_start' => 20231230, 'exhibition_end' => 20240130,
            'category_id' => 1, 'image' => '/img/test4.jpg', 'content' => '전시내용입니다.', 'caution' => '사진 촬영이 불가능합니다.',
            'location' => '38118 경상북도 경주시 경감로 614(천군동 130) 솔거미술관', 'opentime' => 20231130100000, 'closetime' => 20231230180000,
            'admission_fee' => 3000, 'link' => 'link', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => now()],
            ['user_id' => '1', 'title' => '전시제목입니다.', 'exhibition_start' => 20230101, 'exhibition_end' => 20240112,
            'category_id' => 1, 'image' => '/img/test5.jpg', 'content' => '전시내용입니다.', 'caution' => '사진 촬영이 불가능합니다.',
            'location' => '38118 경상북도 경주시 경감로 614(천군동 130) 솔거미술관', 'opentime' => 20231130100000, 'closetime' => 20231230180000,
            'admission_fee' => 3000, 'link' => 'link', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => now()],
            ['user_id' => '1', 'title' => '전시제목입니다.', 'exhibition_start' => 20230101, 'exhibition_end' => 20240222,
            'category_id' => 1, 'image' => '/img/test6.jpg', 'content' => '전시내용입니다.', 'caution' => '사진 촬영이 불가능합니다.',
            'location' => '38118 경상북도 경주시 경감로 614(천군동 130) 솔거미술관', 'opentime' => 20231130100000, 'closetime' => 20231230180000,
            'admission_fee' => 3000, 'link' => 'link', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => now()],
            ['user_id' => '1', 'title' => '전시제목입니다.', 'exhibition_start' => 20231230, 'exhibition_end' => 20240130,
            'category_id' => 1, 'image' => '/img/test7.jpg', 'content' => '전시내용입니다.', 'caution' => '사진 촬영이 불가능합니다.',
            'location' => '38118 경상북도 경주시 경감로 614(천군동 130) 솔거미술관', 'opentime' => 20231130100000, 'closetime' => 20231230180000,
            'admission_fee' => 3000, 'link' => 'link', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => now()],
        ]);
    }
}
