<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'php'
        ]);
        Category::create([
            'name' => 'js'
        ]);
        Category::create([
            'name' => 'css'
        ]);
    }
}
