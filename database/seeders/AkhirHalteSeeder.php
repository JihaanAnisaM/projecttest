<?php

namespace Database\Seeders;


use App\Models\AkhirHalte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkhirHalteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AkhirHalte::create([
            "name" => "Gubeng",
        ]);
    }
}
