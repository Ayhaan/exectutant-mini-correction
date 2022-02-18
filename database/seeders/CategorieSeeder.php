<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                "name" => "voiture",
                "created_at" => now(),
            ],
            [
                "name" => "moto",
                "created_at" => now(),
            ],
            [
                "name" => "bateau",
                "created_at" => now(),
            ],
        ]);
    }
}
