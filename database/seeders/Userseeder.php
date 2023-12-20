<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>"feby biola putri andri",
            'email'=>'febybiola23@gamil.com',
            'password'=> Hash::make(Sayang123),
            //'level'=>'admin'
        ]);
        //
    }
}
