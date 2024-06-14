<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Mahasiswa::insert([
            // [
            //     'id'=>0,
            //     'nim'=>'Purwanto',
            //     'name'=>'12345678',
            // ],
            [
                'id'=>1,
                'nim'=>'Purwanto',
                'name'=>'12345678',
            ],
            [
                'id'=>2,
                'nim'=>'Agus',
                'name'=>'12345678',
            ],
        ]);
    }
}
