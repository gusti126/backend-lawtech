<?php

namespace Database\Seeders;

use App\Models\ForumHukum;
use App\Models\Jawaban;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i < 6; $i++) {
            for ($j = 1; $j < 4; $j++) {
                ForumHukum::create([
                    'user_id' => $i,
                    'hukum_kategori_id' => $j,
                    'content' => $faker->sentence($nbWords = 3 + $i, $variableNbWords = true)
                ]);
            }
        }

        for ($i = 1; $i < 6; $i++) {
            for ($j = 1; $j < 5; $j++) {
                Jawaban::create([
                    'user_id' => $i,
                    'forum_hukum_id' => $j,
                    'content' => $faker->sentence($nbWords = 3 + $i, $variableNbWords = true)
                ]);
            }
        }
    }
}
