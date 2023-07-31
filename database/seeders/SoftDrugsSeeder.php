<?php

namespace Database\Seeders;

use App\Models\Soft_drugs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoftDrugsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $soft_drugs=[
            'creams',
            'pastes',
        ];

        foreach ($soft_drugs as $soft_drug)
        {
            $obj= new Soft_drugs();
            $obj-> name= $soft_drug;
            $obj->save();
        }
    }
}
