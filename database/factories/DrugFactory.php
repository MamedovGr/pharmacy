<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Drug>
 */
class DrugFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = DB::table('categories')->inRandomOrder()->first();
        $hard_drug = DB::table('hard_drugs')->inRandomOrder()->first();
        $soft_drug = DB::table('soft_drugs')->inRandomOrder()->first();
        $liquid = DB::table('liquids')->inRandomOrder()->first();
        $createdAt = fake()->dateTimeBetween('-1 year', '-1 day');
        return array(
            'name' => fake()->name(),
            'category_id'=>$category->id,
            'hard_drugs_id'=>$hard_drug->id,
            'soft_drugs_id'=>$soft_drug->id,
            'liquids_id'=>$liquid->id,
            'description'=>fake()->paragraph(),
            'price'=>rand(5,500),
            'viewed'=>rand(0,50),
            'image'=>'https://image.winudf.com/v2/image1/Y29tLmptc29mdC5tZWRpY2luZXJlbWluZGVyX2ljb25fMTU1NTM0ODgwN18wMzc',
            'created_at'=>$createdAt,
            'updated_at'=>Carbon::parse($createdAt)->addDays(rand(0,6))->addHours(rand(0,23)),
        );
    }
    /*public function definition(): array

        {
            return [
                'image' => fake()->image('public/images',640,480, null, false)
            ];
        }*/
}
