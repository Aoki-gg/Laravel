<h1>ALUNOS</h1>


<ul>

    @foreach ($alunos as $aluno)
    <li>{{$aluno->pessoa->nome}} - {{$aluno->curso->nome}} - {{$aluno->horas_totais}}</li>
    @endforeach
</ul>