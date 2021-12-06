<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
        User::create([
            'name' => 'Gusti Maulana Rizkia',
            'email' => 'gustirizkia4@gmail.com',
            'password' => Hash::make('admin12345'),
            'role' => 'super admin'
        ]);

        User::create([
            'name' => 'Paturahman Fikri',
            'email' => 'Patur@gmail.com',
            'fokus' => 'Hukum Tata Negara',
            'password' => Hash::make('admin12345'),
            'role' => 'lawyers'
        ]);

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('admin12345'),
            ]);
        }
    }
}
