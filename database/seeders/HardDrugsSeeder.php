<?php

namespace Database\Seeders;

use App\Models\Hard_drugs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HardDrugsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hard_drugs = [
            'tablets',
            'capsules',
        ];

        foreach ($hard_drugs as $hard_drug)
        {
            $obj=new Hard_drugs();
            $obj->name= $hard_drug;
            $obj->save();
        }
    }

}
