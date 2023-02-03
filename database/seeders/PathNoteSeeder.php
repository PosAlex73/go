<?php

namespace Database\Seeders;

use App\Models\PathNote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PathNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PathNote::factory()->count(50)->create();
    }
}
