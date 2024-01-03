<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'name'=>'パブロンゴールドA 28包',
            'maker'=>'大正製薬',
            'price'=>'2057',
            'discription'=>'かぜの諸症状（せき、たん、のどの痛み、くしゃみ、鼻みず、鼻づまり、悪寒、発熱、頭痛、関節の痛み、筋肉の痛み）の緩和',
            'jancode'=>'4987306045149',
            // 'created_at' => new DateTime(),
            // 'updated_at' => new DateTime(),
            'has_stock'=>true,
            ]);
    }
}
