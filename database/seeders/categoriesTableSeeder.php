<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\category;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $kat = new category();
    $kat->name = "Makanan";
    $kat->deskripsi = "Makanan Sehat";
    $kat->save();
    }
}
