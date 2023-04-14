<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pack')->insert(['name' => 'Grandpa Muto', 'series_id' => 1]);
        DB::table('pack')->insert(['name' => 'Mai Valentine', 'series_id' => 1]);
        DB::table('pack')->insert(['name' => 'Bakura', 'series_id' => 1]);
        DB::table('pack')->insert(['name' => 'Joey Wheeler', 'series_id' => 1]);
        DB::table('pack')->insert(['name' => 'Seto Kaiba', 'series_id' => 1]);
        DB::table('pack')->insert(['name' => 'Yugi', 'series_id' => 1]);
        DB::table('pack')->insert(['name' => 'Alexis Rhodes', 'series_id' => 2]);
        DB::table('pack')->insert(['name' => 'Bastion', 'series_id' => 2]);
        DB::table('pack')->insert(['name' => 'Chazz Princeton', 'series_id' => 2]);
        DB::table('pack')->insert(['name' => 'Syrus Truesdale', 'series_id' => 2]);
        DB::table('pack')->insert(['name' => 'Jesse Anderson', 'series_id' => 2]);
        DB::table('pack')->insert(['name' => 'Jaden Yuki', 'series_id' => 2]);
        DB::table('pack')->insert(['name' => 'Tetsu Trudge', 'series_id' => 3]);
        DB::table('pack')->insert(['name' => 'Leo/Luna', 'series_id' => 3]);
        DB::table('pack')->insert(['name' => 'Akiza Izinski', 'series_id' => 3]);
        DB::table('pack')->insert(['name' => 'Jack Atlas', 'series_id' => 3]);
        DB::table('pack')->insert(['name' => 'Crow', 'series_id' => 3]);
        DB::table('pack')->insert(['name' => 'Yusei Fudo', 'series_id' => 3]);
        DB::table('pack')->insert(['name' => 'Cathy Katherine', 'series_id' => 4]);
        DB::table('pack')->insert(['name' => 'Quinton', 'series_id' => 4]);
        DB::table('pack')->insert(['name' => 'Kite Tenjo', 'series_id' => 4]);
        DB::table('pack')->insert(['name' => 'Shark', 'series_id' => 4]);
        DB::table('pack')->insert(['name' => 'Yuma Tsukumo', 'series_id' => 4]);
        DB::table('pack')->insert(['name' => 'Gong Strong', 'series_id' => 5]);
        DB::table('pack')->insert(['name' => 'Zuzu Boyle', 'series_id' => 5]);
        DB::table('pack')->insert(['name' => 'Shay', 'series_id' => 5]);
        DB::table('pack')->insert(['name' => 'Declan Akaba', 'series_id' => 5]);
        DB::table('pack')->insert(['name' => 'Yuya Sakaki', 'series_id' => 5]);
        DB::table('pack')->insert(['name' => 'Playmaker', 'series_id' => 6]);
        DB::table('pack')->insert(['name' => 'Blue Angel', 'series_id' => 6]);
        DB::table('pack')->insert(['name' => 'Soulburner', 'series_id' => 6]);
        DB::table('pack')->insert(['name' => 'Varis', 'series_id' => 6]);
        DB::table('pack')->insert(['name' => 'Ai', 'series_id' => 6]);
        
    }
}
