<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => '腕時計',
                'price' => '15000',
                'description' => 'スタイリッシュなデザインのメンズ腕時計',
                'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Armani+Mens+Clock.jpg',

            ],
            [
                'name' => 'HDD',
                'price' => '5000',
                'description' => '高速で信頼性の高いハードディスク',
                'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/HDD+Hard+Disk.jpg',
                
            ],
            [
                'name' => '玉ねぎ3束',
                'price' => '300',
                'description' => '新鮮な玉ねぎ3束のセット',
                'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/iLoveIMG+d.jpg',
            ],
            [
                'name' => '革靴',
                'price' => '4000',
                'description' => 'クラシックなデザインの革靴',
                'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Leather+Shoes+Product+Photo.jpg',
            ],
            [
                'name' => 'ノートPC',
                'price' => '45000',
                'description' => '高性能なノートパソコン',
                'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Living+Room+Laptop.jpg',
            ],
            [
                'name' => '',
                'price' => '',
                'description' => '',
                'img' => '',
            ],
            [
                'name' => 'マイク',
                'price' => '8000',
                'description' => '高音質のレコーディング用マイク',
                'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Music+Mic+4632231.jpg',
            ],
            [
                'name' => 'ショルダーバッグ',
                'price' => '3500',
                'description' => 'おしゃれなショルダーバッグ',
                'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Purse+fashion+pocket.jpg',
            ],
            [
                'name' => 'タンブラー',
                'price' => '500',
                'description' => '使いやすいタンブラー',
                'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Tumbler+souvenir.jpg',
            ],
            [
                'name' => 'コーヒーミル',
                'price' => '4000',
                'description' => '手動のコーヒーミル',
                'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Waitress+with+Coffee+Grinder.jpg',
            ],
            [
                'name' => 'メイクセット',
                'price' => '2500',
                'description' => '便利なメイクアップセット',
                'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/%E5%A4%96%E5%87%BA%E3%83%A1%E3%82%A4%E3%82%AF%E3%82%A2%E3%83%83%E3%83%95%E3%82%9A%E3%82%BB%E3%83%83%E3%83%88.jpg',
            ],
           
        ]);
    }
}
