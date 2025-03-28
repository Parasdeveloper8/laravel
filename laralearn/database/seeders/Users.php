<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert dummy data
        DB::table('users')->insert([
           'name' => Str::random(50), //10 chars random value
           'email'=> Str::random(10) . '@gmail.com',
           'password' => Str::random(10)
        ]);
    }
}
