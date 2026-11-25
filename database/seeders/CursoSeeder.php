<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data;

        $data = [["nome" => "Tecnologia em analise e desenvolvimento de sistemas", "duracao" => 3],
                 ["nome" => "Fisica", "duracao" => 3],
                 ["nome" => "Meio ambiente", "duracao" => 3]
        ];
        DB::table("cursos")->insert($data);
    }
}
