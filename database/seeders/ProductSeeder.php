<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::all();
        $category = Category::all();

        for ($i=0; $i < 100; $i++) { 
            $usr = $user->random();
            $cat = $category->random();

            Product::factory()->create([
                'user_id' => $usr->id,
                'category_id' => $cat->id,
            ]);
        }
    }
}
