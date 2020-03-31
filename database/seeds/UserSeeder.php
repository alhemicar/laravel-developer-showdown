<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $timezones = ['CET', 'CST', 'GMT+1'];
        for ($i = 0 ; $i < 20 ; $i++) {
            $random = array_rand($timezones);

            App\User::create([
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'password' => \Illuminate\Support\Facades\Hash::make(\Illuminate\Support\Str::random(6)), // password
                'timezone' => $timezones[$random]
            ]);
        }
    }
}
