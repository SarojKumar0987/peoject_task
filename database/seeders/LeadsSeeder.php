<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lead;

class LeadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lead::create(['name' => 'abc', 'email' => 'abc@example.com', 'phone' => '1234567890', 'status' => 'new']);
        Lead::create(['name' => 'kumar', 'email' => 'kumar@example.com', 'phone' => '0987654321', 'status' => 'contacted']);
        Lead::create(['name' => 'raju', 'email' => 'raju@example.com', 'phone' => '1122334455', 'status' => 'qualified']);
    }
}
