<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('users')->truncate();

        \DB::table('users')->insert([
            [
                'name' => "Ruth Grace",
                'email' => "ruthgracearlyanamanurung@gmail.com",
                'password' => bcrypt('rahasia'),
                'username' => "ruthgracea",
            ],
            [
                'name' => "Iwan Syahfrulla",
                'email' => "mr_iwan@yahoo.co.id",
                'password' => bcrypt('sandi'),
                'username' => "iwanaja"
            ],
            [
                'name' => "Sintong Sutanto",
                'email' => "sintongsutanto@yahoo.co.id",
                'password' => bcrypt('sintong'),
                'username' => "sintongsutanto"
            ],
            [
                'name' => "Sakifa Indriyani",
                'email' => "sakifakifa@yahoo.co.id",
                'password' => bcrypt('halodunia'),
                'username' => "sakifaputri"
            ],
            [
                'name' => "Fenaya Cecily",
                'email' => "fenayacecily@yahoo.co.id",
                'password' => bcrypt('haloalam'),
                'username' => "fenayacecily"
            ],
            [
                'name' => "Rizki Siti Aulia",
                'email' => "rizkisitiaulia@yahoo.co.id",
                'password' => bcrypt('halopohon'),
                'username' => "rizkisiti"
            ],
        ]);
    }
}
