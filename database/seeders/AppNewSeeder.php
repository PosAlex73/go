<?php

namespace Database\Seeders;

use App\Models\AppNew;
use Database\Factories\AppNewFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppNewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppNew::factory()->count(50)->create();
    }
}
