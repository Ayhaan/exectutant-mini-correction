<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Tshishimbi",
                "prenom" => "Heredia",
                "age" => "24",
                "email" => "test@test.com",
                "password" => Hash::make("testtest"),
                "role_id" => 1, //admin
                "avatar_id" => 1, //homme avatar
                "created_at" => now(), 
            ],
            [
                "name" => "Tshishimbi",
                "prenom" => "Heredia",
                "age" => "24",
                "email" => "webmaster@test.com",
                "password" => Hash::make("testtest"),
                "role_id" => 2, //webmaster
                "avatar_id" => 1, //homme avatar
                "created_at" => now(), 
            ],
            [
                "name" => "Makaya",
                "prenom" => "Kevin",
                "age" => "24",
                "email" => "membre@test.com",
                "password" => Hash::make("testtest"),
                "role_id" => 3, //user
                "avatar_id" => 2, //femme avatar
                "created_at" => now(), 

            ],
            [
                "name" => "Makaya",
                "prenom" => "Kevin",
                "age" => "24",
                "email" => "membre3@test.com",
                "password" => Hash::make("testtest"),
                "role_id" => 3, //user
                "avatar_id" => 2, //femme avatar
                "created_at" => now(), 

            ],
            [
                "name" => "Makaya",
                "prenom" => "Kevin",
                "age" => "24",
                "email" => "membre2@test.com",
                "password" => Hash::make("testtest"),
                "role_id" => 3, //user
                "avatar_id" => 2, //femme avatar
                "created_at" => now(), 

            ],
            [
                "name" => "Makaya",
                "prenom" => "Kevin",
                "age" => "24",
                "email" => "membre6@test.com",
                "password" => Hash::make("testtest"),
                "role_id" => 3, //user
                "avatar_id" => 2, //femme avatar
                "created_at" => now(), 

            ],
            [
                "name" => "Makaya",
                "prenom" => "Kevin",
                "age" => "24",
                "email" => "membre8@test.com",
                "password" => Hash::make("testtest"),
                "role_id" => 3, //user
                "avatar_id" => 2, //femme avatar
                "created_at" => now(), 

            ],
        ]);
    }
}
