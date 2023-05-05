<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=>'Mr. Vico Lomar',
                'member'=>'Gold',
                'star'=>150
            ],[
                'name'=>'Ms. Fei Fei Li',
                'member'=>'Green',
                'star'=>35
            ]
        ]);
        DB::table('transactions')->insert([
            [
                'user_id'=>'1',
                'kopi'=>'Americano',
                'pembelian'=>Carbon::create('2023', '03', '19')
            ],[
                'user_id'=>'1',
                'kopi'=>'Americano',
                'pembelian'=>Carbon::create('2023', '03', '20')
            ],[
                'user_id'=>'1',
                'kopi'=>'Latte',
                'pembelian'=>Carbon::create('2023', '03', '21')
            ],[
                'user_id'=>'2',
                'kopi'=>'Macchiato',
                'pembelian'=>Carbon::create('2023', '03', '18')
            ],[
                'user_id'=>'2',
                'kopi'=>'Affogato',
                'pembelian'=>Carbon::create('2023', '03', '19')
            ],[
                'user_id'=>'2',
                'kopi'=>'Affogato',
                'pembelian'=>Carbon::create('2023', '03', '21')
            ]
        ]);
    }
}
