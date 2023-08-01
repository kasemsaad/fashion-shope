<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=array(
            array(
                'description'=>'60% OFF',
                'status'=>'active',
                'photo'=>'uploadfile\Kids-clothes-Hong-Kong-seed.jpg',
                'title'=>'KIDS <<<NEW COLLECTION>>> ',
                'slug'=>'KIDS <<<NEW COLLECTION>>> ',
            ),
            array(
                'description'=>'60% OFF',
                'status'=>'active',
                'photo'=>'uploadfile\Summer-fashion.jpg',
                'title'=>'WOMENS   <<<NEW COLLECTION>>> ',
                'slug'=>'WOMENS    <<<NEW COLLECTION>>> ',

            ),
            array(

                'description'=>'60% OFF',
                'status'=>'active',
                'photo'=>'uploadfile\0hMcLJZVO1fEafat4qrVNzT5sDhc7cmncg30OCt5.jpg',
                'title'=>'MEN`S <<<NEW COLLECTION>>> ',
                'slug'=>'MEN`S <<<NEW COLLECTION>>> ',
            )

        );

        DB::table('banners')->insert($data);
    }
}
