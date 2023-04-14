<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('series')->insert(['name' => 'Yu-Gi-Oh!']);
        DB::table('series')->insert(['name' => 'Yu-Gi-Oh! GX']);
        DB::table('series')->insert(['name' => 'Yu-Gi-Oh! 5D\'s']);
        DB::table('series')->insert(['name' => 'Yu-Gi-Oh! ZEXAL']);
        DB::table('series')->insert(['name' => 'Yu-Gi-Oh! ARC-V']);
        DB::table('series')->insert(['name' => 'Yu-Gi-Oh! VRAINS']);
    }
}
