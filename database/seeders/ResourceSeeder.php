<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
                ["name" => "curso.index"],
                ["name" => "curso.create"],
                ["name" => "curso.show"],
                ["name" => "curso.edit"],
                ["name" => "curso.delete"],

                ["name" => "disciplina.index"],
                ["name" => "disciplina.create"],
                ["name" => "disciplina.show"],
                ["name" => "disciplina.edit"],
                ["name" => "disciplina.delete"],

                ["name" => "aluno.index"],
                ["name" => "aluno.create"],
                ["name" => "aluno.show"],
                ["name" => "aluno.edit"],
                ["name" => "aluno.delete"],

                ["name" => "matricula.index"],
                ["name" => "matricula.create"],
                ["name" => "matricula.show"],
                ["name" => "matricula.edit"],
                ["name" => "matricula.delete"],
        ];

        DB::table('resources')->insert($data);
    }
}
