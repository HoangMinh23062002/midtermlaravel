<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Foodseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tfood')->insert(
            [
                [
                    'name'=>"củ cải",
                    'frice'=>334.6,
                    'image'=>"https://images.foody.vn/res/g109/1086817/prof/s1242x600/foody-upload-api-foody-mobile-cv-041fa799-210716142843.jpeg",
                    'title'=>"củ"
                ],
                [
                    'name'=>"diep ca",
                    'frice'=>334.6,
                    'image'=>"https://images.foody.vn/res/g109/1086817/prof/s1242x600/foody-upload-api-foody-mobile-cv-041fa799-210716142843.jpeg",
                    'title'=>"rau"
                ],
                [
                    'name'=>"đậu",
                    'frice'=>334.6,
                    'image'=>"https://images.foody.vn/res/g109/1086817/prof/s1242x600/foody-upload-api-foody-mobile-cv-041fa799-210716142843.jpeg",
                    'title'=>"hạt"
                ],
                [
                    'name'=>"bí",
                    'frice'=>334.6,
                    'image'=>"https://images.foody.vn/res/g109/1086817/prof/s1242x600/foody-upload-api-foody-mobile-cv-041fa799-210716142843.jpeg",
                    'title'=>"củ"
                ],
                [
                    'name'=>"xà lách",
                    'frice'=>334.6,
                    'image'=>"https://images.foody.vn/res/g109/1086817/prof/s1242x600/foody-upload-api-foody-mobile-cv-041fa799-210716142843.jpeg",
                    'title'=>"rau"
                ],
                [
                    'name'=>"cải ngọt",
                    'frice'=>334.6,
                    'image'=>"https://images.foody.vn/res/g109/1086817/prof/s1242x600/foody-upload-api-foody-mobile-cv-041fa799-210716142843.jpeg",
                    'title'=>"rau"
                ],
                [
                    'name'=>"khoailang",
                    'frice'=>334.6,
                    'image'=>"https://images.foody.vn/res/g109/1086817/prof/s1242x600/foody-upload-api-foody-mobile-cv-041fa799-210716142843.jpeg",
                    'title'=>"củ"
                ],
                [
                    'name'=>"xà lách",
                    'frice'=>334.6,
                    'image'=>"https://images.foody.vn/res/g109/1086817/prof/s1242x600/foody-upload-api-foody-mobile-cv-041fa799-210716142843.jpeg",
                    'title'=>"rau"
                ],
                [
                    'name'=>"cải ngọt",
                    'frice'=>334.6,
                    'image'=>"https://images.foody.vn/res/g109/1086817/prof/s1242x600/foody-upload-api-foody-mobile-cv-041fa799-210716142843.jpeg",
                    'title'=>"rau"
                ],
                [
                    'name'=>"khoailang",
                    'frice'=>334.6,
                    'image'=>"https://images.foody.vn/res/g109/1086817/prof/s1242x600/foody-upload-api-foody-mobile-cv-041fa799-210716142843.jpeg",
                    'title'=>"củ"
                ]
            ]
            );
    }
}
