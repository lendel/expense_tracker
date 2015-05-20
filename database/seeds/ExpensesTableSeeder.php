<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Faker\Factory as Faker;
use App\Expense as Expense;

class ExpensesTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        $faker = Faker::create();

        foreach(range(1, 200) as $index)
        {
            Expense::create([
                'name' => $faker->bs,
                'description' => $faker->realText(),
                'company' => $faker->company,
                'link' => $faker->url,
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10000),
                'renewal' => $faker->randomElement($array = array ('weekly', 'monthly', 'yearly'))
            ]);
        }
    }
}
