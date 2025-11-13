<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student')->insert([
            'name' => "liz emily",
            'nim' => 1231231756,
            'prodi' => "Teknologi Informasi",
            'email' => "lizJosjis@gmail.com",
            'nohp' => 628753647517,
        ]);
    }
}
    

