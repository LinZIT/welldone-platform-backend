<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('departments')->delete();

        DB::table('departments')->insert(array(
            0 =>
            array(
                'id' => 1,
                'description' => 'IT',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'description' => 'Sales',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'description' => 'Income',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id' => 4,
                'description' => 'Finance',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'id' => 5,
                'description' => 'Analysis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array(
                'id' => 6,
                'description' => 'Disbursements',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array(
                'id' => 7,
                'description' => 'Operations',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array(
                'id' => 8,
                'description' => 'Customer Service',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array(
                'id' => 9,
                'description' => 'Human Resources',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array(
                'id' => 10,
                'description' => 'Claims',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
