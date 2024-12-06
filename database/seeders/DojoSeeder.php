<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\dojo;

class DojoSeeder extends Seeder
{
    /**
     * Run the database seeds.

     */
    public function run(): void
    {
        dojo::factory()->count(50)->create();
    }
}
