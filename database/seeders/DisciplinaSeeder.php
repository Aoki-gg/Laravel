<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data;

        $data = [
            ["nome" => "Orientacao a objetos", "carga_horaria" => 60, "curso_id" => 1],
            ["nome" => "Desenvolvimento WEB1", "carga_horaria" => 60, "curso_id" => 1],
            ["nome" => "Analise de sistemas", "carga_horaria" => 60, "curso_id" => 1],
            ["nome" => "Banco de dados", "carga_horaria" => 60, "curso_id" => 1]
        ];

        DB::table("disciplinas")->insert($data);
    }
}
