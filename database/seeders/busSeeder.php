<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class busSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bus::create([
            "name" => "Suroboyo Bus",
            "price" => 100000,
            "category_id" => 1,
            "id_halte_awal" => 1,
            "id_halte_akhir" => 1,
        ]);
    }
}
