<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 8; $i++) {
            $position = $i + 1;
            DB::table('employees')->insert([
                'name' => $faker->name,
                'alamat' => $faker->address,
                'phone' => $faker->randomDigit,
                'email' => $faker->safeEmail,
                'picture' => 'somepicture',
                'position_id' => $position
            ]);
        }
    }
}