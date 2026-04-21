<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class LeaveRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('leave_requests')->insert([
            [
                'employee_id' => 1,
                'leave_type' => 'sick',
                'start_date' => Carbon::parse('2026-04-27'),
                'end_date' => Carbon::parse('2026-04-28'),
                'status' => 'pending',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => 2,
                'leave_type' => 'vacation',
                'start_date' => Carbon::parse('2026-05-02'),
                'end_date' => Carbon::parse('2026-05-04'),
                'status' => 'approved',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);
    }
}
