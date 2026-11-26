<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        //professr-disciplina
        ["role_id" => 1, "resource_id" => 6, "permission" => true],
        ["role_id" => 1, "resource_id" => 7, "permission" => true],
        ["role_id" => 1, "resource_id" => 8, "permission" => true],
        ["role_id" => 1, "resource_id" => 9, "permission" => true],

        //professor-aluno
        ["role_id" => 1, "resource_id" => 11, "permission" => true],
        ["role_id" => 1, "resource_id" => 13, "permission" => true],

        //coordenador-curso
        ["role_id" => 2, "resource_id" => 1, "permission" => true],
        ["role_id" => 2, "resource_id" => 2, "permission" => true],
        ["role_id" => 2, "resource_id" => 3, "permission" => true],
        ["role_id" => 2, "resource_id" => 4, "permission" => true],
        ["role_id" => 2, "resource_id" => 5, "permission" => true],

        //coordenador-disciplina
        ["role_id" => 2, "resource_id" => 6, "permission" => true],
        ["role_id" => 2, "resource_id" => 7, "permission" => true],
        ["role_id" => 2, "resource_id" => 8, "permission" => true],
        ["role_id" => 2, "resource_id" => 9, "permission" => true],
        ["role_id" => 2, "resource_id" => 10, "permission" => true],
        
        //coordenador-matriculas
        ["role_id" => 2, "resource_id" => 16, "permission" => true],
        ["role_id" => 2, "resource_id" => 17, "permission" => true],
        ["role_id" => 2, "resource_id" => 18, "permission" => true],
        ["role_id" => 2, "resource_id" => 19, "permission" => true],
        ["role_id" => 2, "resource_id" => 20, "permission" => true],

        //coordenador-aluno
        ["role_id" => 2, "resource_id" => 11, "permission" => true],
        ["role_id" => 2, "resource_id" => 12, "permission" => true],
        ["role_id" => 2, "resource_id" => 13, "permission" => true],
        ["role_id" => 2, "resource_id" => 14, "permission" => true],
        ["role_id" => 2, "resource_id" => 15, "permission" => true],

        //aluno-disciplinas
        ["role_id" => 3, "resource_id" => 6, "permission" => true],
        ["role_id" => 3, "resource_id" => 8, "permission" => true],

        ];

        DB::table('permissions')->insert($data);
    }

    
}
