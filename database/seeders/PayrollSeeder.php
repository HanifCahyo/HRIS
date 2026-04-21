<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class PayrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('payroll')->insert([
            [
                'employee_id' => 1,
                'salary' => $faker->randomFloat(2, 3000, 6000),
                'bonuses' => $faker->randomFloat(2, 500, 2000),
                'deductions' => $faker->randomFloat(2, 100, 500),
                'net_salary' => $faker->randomFloat(2, 2500, 6500),
                'pay_date' => Carbon::parse('2026-04-30'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => 2,
                'salary' => $faker->randomFloat(2, 3000, 6000),
                'bonuses' => $faker->randomFloat(2, 500, 2000),
                'deductions' => $faker->randomFloat(2, 100, 500),
                'net_salary' => $faker->randomFloat(2, 2500, 6500),
                'pay_date' => Carbon::parse('2026-04-30'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
