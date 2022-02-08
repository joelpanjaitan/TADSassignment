<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            // 'Id' => Str::random(5), 
            'nama' => Str::random(10),
            'alamat' => Str::random(10).'@gmail.com',
            'no_telp' => Str::random(10),
            'fakultas_id' => Str::random(1),
            'program_studi_id' => Str::random(1),
            // 'password' => Hash::make('password'),
        ]);
    }
}
