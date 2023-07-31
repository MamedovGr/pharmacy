<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Medicine',
            'Cosmetic',
            'Medical_equipment',
            'Orthopedic',
            'Mother_and_Baby'
        ];

        foreach ($categories as $category)
        {
            $obj= new Category();
            $obj-> name = $category;
            $obj-> save();
        }
    }
}
