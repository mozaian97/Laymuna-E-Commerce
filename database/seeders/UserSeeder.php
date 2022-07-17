<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
          'name'=>'Ali Omar',
          'email'=>'ali@ali.com',
          'password'=>Hash::make('1234')
        ],
        [
          'name'=>'jelnaar',
          'email'=>'jelnaar@gmail.com',
          'password'=>Hash::make('1234')
        ],
        [
          'name'=>'Ahmad Kaled',
          'email'=>'ahmad@yahoo.com',
          'password'=>Hash::make('1234')
        ],
        [
          'name'=>'Islam Kalel',
          'email'=>'islam@outlook.com',
          'password'=>Hash::make('1234')
        ],
        [
          'name'=>'Sameerh Ali',
          'email'=>'sameerh@gmail.com',
          'password'=>Hash::make('1234')
        ],
        [
          'name'=>'Tamara Ishak',
          'email'=>'tamra@yahoo.com',
          'password'=>Hash::make('1234')
        ]
      ]);
    }
}
