<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bukuseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buku')->insert([
            [
                'judul' => 'Pemrograman Web dengan Laravel',
                'stok' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Database Relasional dan SQL',
                'stok' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
