<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class PresenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('presences')->insert([
            [
                'employee_id' => 1,
                'check_in' => Carbon::parse('2026-04-22 08:00:00'),
                'check_out' => Carbon::parse('2026-04-22 17:00:00'),
                'date' => Carbon::parse('2026-04-22'),
                'status' => 'present',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => 2,
                'check_in' => Carbon::parse('2026-04-22 08:00:00'),
                'check_out' => Carbon::parse('2026-04-22 17:00:00'),
                'date' => Carbon::parse('2026-04-22'),
                'status' => 'present',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
