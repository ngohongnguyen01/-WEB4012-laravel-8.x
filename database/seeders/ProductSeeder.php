<?php

namespace Database\Seeders;
use Faker\Provider\Image;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++) {
            $data = [
                'name' => $faker->name,
                'price' =>$faker->randomNumber(2),
                'quantity' => $faker->randomNumber(2),
                'category_id' => $faker->numberBetween($min=1,$max=10),
                'image' => $faker->image('public/assets/image/admin/products', 400, 300, null, false),
            ];
            DB::table('products')->insert($data);
        }
    }
}
