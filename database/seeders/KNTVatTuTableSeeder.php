<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KNTVatTuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("kntvattu")->insert([
            "KNTMaVT" => "DD01",
            'KNTTenVT' => 'Đầu DVD Hitachi 1 cửa',
            'KNTDvtinh'=> 'Bộ',
            'KNTPhantram'=> 40,
        ]);
    }
}
