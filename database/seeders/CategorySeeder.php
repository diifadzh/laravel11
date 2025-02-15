<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Business',
            'slug' => 'business',
            'color' => 'yellow'
        ]);

    }
}
