<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Faker\Factory as Faker;
use App\User as User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->word
            ]);
        }
    }
}
