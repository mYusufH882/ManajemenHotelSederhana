<?php

namespace Database\Seeders;

use App\Models\Kamar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kamar::create([
            "no_kamar" => 1,
            "tipe_kamar" => "Standard Room", 
            "harga_kamar" => 150000,
            "fasilitas" => "Wifi & AC",
            "status_kamar" => "kosong"
        ]);

        Kamar::create([
            "no_kamar" => 2,
            "tipe_kamar" => "Deluxe Room", 
            "harga_kamar" => 350000,
            "fasilitas" => "Wifi, AC, Meja & Makan Gratis",
            "status_kamar" => "kosong"
        ]);

        Kamar::create([
            "no_kamar" => 3,
            "tipe_kamar" => "Executive Room", 
            "harga_kamar" => 150000,
            "fasilitas" => "Wifi, AC, Meja, Ruang Tamu & Pelayanan Gratis Lainnya",
            "status_kamar" => "kosong"
        ]);
    }
}
