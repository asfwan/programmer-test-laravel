<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            $a=["Debit","Credit"];
            $type=$a[array_rand($a)];
            
            DB::table('TokenTransaction')->insert([
                'amount' => rand(1,50),
                'balance' => rand(1,50),
                'type' => $type,
                'description' => 'testing',
                'user_id' => 1,
            ]);
        }
    }
}
