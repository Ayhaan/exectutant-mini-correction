<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            [
                "name" => "Homme avatar",
                "url" => "avatar_1.jfif",
                "created_at" => now(),
            ],
            [
                "name" => "Femme avatar",
                "url" => "avatar_2.png",
                "created_at" => now(),
            ]
        ]);
    }
}
