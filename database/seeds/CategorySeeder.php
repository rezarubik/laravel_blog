<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Web Programming',
                'slug' => Str::slug('Programming')
            ],
            [
                'name' => 'Mobile Programming',
                'slug' => Str::slug('Programming')
            ],
            [
                'name' => 'Mathematics',
                'slug' => Str::slug('Mathematics')
            ],
        ];
        Category::insert($data);
    }
}
