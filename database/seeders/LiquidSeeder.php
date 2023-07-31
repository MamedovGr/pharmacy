<?php

namespace Database\Seeders;

use App\Models\Liquid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LiquidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $liquids=[
            'suspensions',
            'syrups',
        ];

        foreach ($liquids as $liquid)
        {
            $obj = new Liquid();
            $obj->name = $liquid;
            $obj->save();
        }
    }
}
