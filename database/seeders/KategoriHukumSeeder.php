<?php

namespace Database\Seeders;

use App\Models\HukumKategori;
use Illuminate\Database\Seeder;

class KategoriHukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HukumKategori::create([
            'nama' => 'Pidana'
        ]);
        HukumKategori::create([
            'nama' => 'Perdata'
        ]);
        HukumKategori::create([
            'nama' => 'Tata Negara'
        ]);
    }
}
