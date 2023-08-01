<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=array(
            array(
                'status'=>'active',
                'title'=>'H & M ',
                'slug'=>'H & M ',
            ),
            array(
                'status'=>'active',
                'title'=>'Maybelline NY ',
                'slug'=>'Maybelline NY ',
            ),
            array(
                'status'=>'active',
                'title'=>'Nike',
                'slug'=>'Nike',
            ),
            array(
                'status'=>'active',
                'title'=>'Victoria`s Secret',
                'slug'=>'Victoria`s Secret',
            ),
            array(
                'status'=>'active',
                'title'=>'ZARA ',
                'slug'=>'ZARA ',
            ),
            array(
                'status'=>'active',
                'title'=>'Michael Kors',
                'slug'=>'Michael Kors',
            ),
            array(
                'status'=>'active',
                'title'=>'American Eagle',
                'slug'=>'American Eagle',
            ),
            array(
                'status'=>'active',
                'title'=>'Adidas',
                'slug'=>'Adidas ',
            ),
            array(
                'status'=>'active',
                'title'=>'Activ',
                'slug'=>'Activ',
            ),

        );

        DB::table('brands')->insert($data);
    }
}
