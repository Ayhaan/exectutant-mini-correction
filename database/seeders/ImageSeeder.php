<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                "url" => "auto_1.jfif",
                "categorie_id" => 1,
                "created_at" => now(),
            ],
            [
                "url" => "auto_2.jpg",
                "categorie_id" => 1,

                "created_at" => now(),
            ],
            [
                "url" => "moto_1.jpg",
                "categorie_id" => 2,

                "created_at" => now(),
            ],
            [
                "url" => "bateau_1.jfif",
                "categorie_id" => 3,

                "created_at" => now(),
            ],
            [
                "url" => "bateau_2.jpg",
                "categorie_id" => 3,

                "created_at" => now(),
            ],

        ]);
    }
}
