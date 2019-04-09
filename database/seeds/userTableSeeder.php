<?php

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Integer;
use Illuminate\Support\Carbon;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'sunjeep',
            'email' => 'sunjeep@gmail.com',
            'isAdmin' => true,
            'carColor' => 'black',
            'carAccentColor' => 'black',
            'carSeatColor' => 'black',
            'trim' => 1,
            'remember_token' => Str::random(10),
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'louis',
            'email' => 'louis@gmail.com',
            'isAdmin' => false,
            'carColor' => 'black',
            'carAccentColor' => 'black',
            'carSeatColor' => 'black',
            'trim' => 1,
            'remember_token' => Str::random(10),
            'password' => bcrypt('password'),
        ]);
    }
}
