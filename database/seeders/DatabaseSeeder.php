<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

     // DatabaseSeeder.php
     public function run(): void
     {
         $this->call([
             ViajesSeeder::class,
         ]);
     }
     
}
