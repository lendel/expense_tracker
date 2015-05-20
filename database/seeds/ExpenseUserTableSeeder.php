<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Faker\Factory as Faker;
use App\User as User;
use App\Expense as Expense;

class ExpenseUserTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        $faker = Faker::create();

        $userIds = User::lists('id');
        $expenseIds = Expense::lists('id');

        foreach(range(1, 300) as $index)
        {
            $expenseId = (int) $faker->randomElement($expenseIds);
            $expense = Expense::find($expenseId);

            DB::table('expense_user')->insert([
                'user_id'       => $faker->randomElement($userIds),
                'expense_id'    => $expenseId,
                'price_charged' => $expense['price']
            ]);
        }
    }
}
