<?php

use Illuminate\Database\Seeder;
use App\Category;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Category::insert([
            ['name' => 'Apple', 'slug' => 'apple', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Samsung', 'slug' => 'samsung', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Xiaomi', 'slug' => 'xiaomi', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Oppo', 'slug' => 'oppo', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Symphony', 'slug' => 'symphony', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nokia', 'slug' => 'nokia', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Huawei', 'slug' => 'huawei', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Vivo', 'slug' => 'vivo', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dialog', 'slug' => 'dialog', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Blackberry', 'slug' => 'blackberry', 'created_at' => $now, 'updated_at' => $now],
        ]);
        
    }
}
