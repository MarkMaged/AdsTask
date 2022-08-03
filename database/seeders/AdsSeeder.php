<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ads')->insert([
            'title' => Str::random(10),
            'type' => Str::random(5),
            'description' => Str::random(25),
            'category' => Str::random(6),
            'tags' => Str::random(15),
            'advertiser' => Str::random(20),
            'image' => Str::random(20),
            'user_id' => 20,
        ]);
    }
}
