<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('basic_infos')->insert([
            ['Email' => 'sales@uroom.com.my', 'Phone' => ''],
            ['Email' => '', 'Phone' => '+60124243438'],
        ]);
        
        DB::table('logos')->insert([
            ['Photo' => ''],
        ]);
    }
}
