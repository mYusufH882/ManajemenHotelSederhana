<?php

namespace Database\Seeders;

use App\Models\Tamu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tamu::create([
            "nama_depan" => "Andi",
            "nama_belakang" => "Kirby",
            "jenis_kelamin" => "L",
            "no_telp" => "089867656",
            "email" => "andi@mail.com",
            "alamat" => "Cimahi"
        ]);
    }
}
