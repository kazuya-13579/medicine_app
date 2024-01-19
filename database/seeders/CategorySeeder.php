<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'=>'胃薬',
            'discription'=>'よく効きます',
        ]);
        DB::table('categories')->insert([
            'name'=>'風邪薬',
            'discription'=>'よく効きます',
        ]);
        DB::table('categories')->insert([
            'name'=>'目薬',
            'discription'=>'よく効きます',
        ]);
        DB::table('categories')->insert([
            'name'=>'胃腸薬',
            'discription'=>'よく効きます',
        ]);
        DB::table('categories')->insert([
            'name'=>'鼻水・鼻づまり',
            'discription'=>'よく効きます',
        ]);
        DB::table('categories')->insert([
            'name'=>'せき・のどの痛み',
            'discription'=>'よく効きます',
        ]);
    }
}
