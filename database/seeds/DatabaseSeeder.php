<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                DepartmentSeeder::class,
                PositionSeeder::class,
                EmployeeSeeder::class,
                InventorySeeder::class,
                ArchiveSeeder::class,
                EmployeeInventorySeeder::class
            ]
        );
    }
}
