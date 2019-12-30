<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        [
            'name' => 'Căn hộ',
            'slug' => Str::slug('Can ho'),
            'status' => '1'
        ],
        [
        'name' => 'Nhà',
        'slug' => Str::slug('Nha'),
        'status' => '1'
        ],
        [
        'name' => 'Đất nền',
        'slug' => Str::slug('Dat nen'),
        'status' => '1'
        
        ],
        [
        'name' => 'Mặt bằng',
        'slug' => Str::slug('Mat bang'),
        'status' => '1'
        ]
        ]);
    }
}
