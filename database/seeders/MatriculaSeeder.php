<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 1 ; $i <= 10 ; $i++){
            $data[] = ["disciplina_id" => 1, "aluno_id" => $i]; 
        }

        DB::table("matriculas")->insert($data);
    }
}
