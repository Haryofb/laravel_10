<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'finance'],
            ['name' => 'it_enginering'],
            ['name' => 'administration'],
            ['name' => 'operation']
        ];

        foreach ($data as $d) {
            DB::table('departments')->insert([
                'name' => $d['name']
            ]);
        }
    }
}