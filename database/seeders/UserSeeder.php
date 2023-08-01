<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=array(
            array(
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('123456789'),
                'role'=>'admin',
                'status'=>'active'
            ),
            array(
                'name'=>'User',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('123456789'),
                'role'=>'user',
                'status'=>'active'
            ),
            array(
                'name'=>'Kasem',
                'email'=>'kasemsaad756@gmail.com',
                'password'=>Hash::make('123456789'),
                'role'=>'admin',
                'status'=>'active'
            ),
        );

        DB::table('users')->insert($data);
    }
}
