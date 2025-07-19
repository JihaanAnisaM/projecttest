<?php

namespace Database\Seeders;

use App\Models\AwalHalte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwalHalteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AwalHalte::create([
            "name" => "Wonokromo",
        ]);
    }
}
