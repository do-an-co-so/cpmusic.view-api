<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Nhạc trẻ',
            'thumbnail' => '/categories/NhacTre.jpg'
        ]);

        Category::create([
            'name' => 'Nhạc trữ tình',
            'thumbnail' => '/categories/TruTinh.jpg'
        ]);

        Category::create([
            'name' => 'Nhạc Hàn Quốc',
            'thumbnail' => '/categories/NhacHanQuoc.jpg'
        ]);

        Category::create([
            'name' => 'Nhạc Nhật Bản',
            'thumbnail' => '/categories/NhacNhatBan.jpg'
        ]);

        Category::create([
            'name' => 'Nhạc Hoa',
            'thumbnail' => '/categories/NhacHoa.jpg'
        ]);

        Category::create([
            'name' => 'Nhạc Âu Mỹ',
            'thumbnail' => '/categories/NhacAuMy.jpg'
        ]);

        Category::create([
            'name' => 'EDM',
            'thumbnail' => '/categories/EDM.jpg'
        ]);

        Category::create([
            'name' => 'Latin',
            'thumbnail' => '/categories/NhacLatin.jpg'
        ]);

        Category::create([
            'name' => 'Nhạc không lời',
            'thumbnail' => '/categories/NhacKhongLoi.jpg'
        ]);

        Category::create([
            'name' => 'Rap',
            'thumbnail' => '/categories/Rap.jpg'
        ]);
    }
}
