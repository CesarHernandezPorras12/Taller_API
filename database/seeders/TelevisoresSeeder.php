<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Televisor;

class TelevisoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de ejemplo para los televisores
        Televisor::factory()->count(100)->create();

    }
    
}

