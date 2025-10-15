<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

// use App\Models\produk;
class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // $brg = new produk();
    // $brg->nama = "Indomie Goreng";
    // $brg->id_kategori = 1;
    // $brg->qty = 100;
    // $brg->harga_beli = 2500;
    // $brg->harga_jual = 3000;
    // $brg->save();



        DB::table('produk')->insert(array([
            'nama' => 'Indomie Goreng',
            'id_kategori' => 1,
            'qty' => 100,
            'harga_beli' => 2500,
            'harga_jual' => 3000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nama' => 'Beras',
            'id_kategori' => 1,
            'qty' => 50,
            'harga_beli' => 12000,
            'harga_jual' => 15000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nama' => 'Minyak Goreng',
            'id_kategori' => 1,
            'qty' => 30,
            'harga_beli' => 14000,
            'harga_jual' => 17000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nama' => 'Susu Kental Manis',
            'id_kategori' => 1,
            'qty' => 80,
            'harga_beli' => 7000,
            'harga_jual' => 9000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nama' => 'Teh Celup',
            'id_kategori' => 2,
            'qty' => 200,
            'harga_beli' => 3000,
            'harga_jual' => 5000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nama' => 'Kopi Instan',
            'id_kategori' => 2,
            'qty' => 150,
            'harga_beli' => 4000,
            'harga_jual' => 6000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nama' => 'Gula Pasir',
            'id_kategori' => 2,
            'qty' => 90,
            'harga_beli' => 12000,
            'harga_jual' => 15000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nama' => 'Sabun Mandi',
            'id_kategori' => 3,
            'qty' => 120,
            'harga_beli' => 5000,
            'harga_jual' => 8000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nama' => 'Sikat Gigi',
            'id_kategori' => 3,
            'qty' => 60,
            'harga_beli' => 3000,
            'harga_jual' => 6000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'nama' => 'Shampoo',
            'id_kategori' => 3,
            'qty' => 70,
            'harga_beli' => 10000,
            'harga_jual' => 13000,
            'created_at' => now(),
            'updated_at' => now(),
        ]
        )
    );
    }
}
