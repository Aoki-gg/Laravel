<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 1 ; $i <= 10 ; $i++){
            $data[] = ["nome" => "Aluno " . $i, "turma" => 2026, "curso_id" => 1]; 
        }

        DB::table("alunos")->insert($data);
    }
}
