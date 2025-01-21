<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public $categories =
    [
        'antipasti', 'primi', 'secondi', 'dolci'
    ];

    public function run(): void
    {
        foreach($this->categories as $category)
        {
            Category::create([
                'name' => $category
            ]);
        }

        // foreach($this->categories as $category)
        // {
        //     DB::table('categories')->insert([
        //         'name' => $category
        //     ]);
        // }
    }
}
