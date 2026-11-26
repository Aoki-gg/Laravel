@extends(
    'template/main',
    [
        'titulo' => "Sistema Aula",
        'cabecalho' => 'Alunos',
        'rota' => 'aluno.index',
        "class" => App\Models\Aluno::class,
    ]
)
@section('conteudo')
    <table class="table align-middle caption-top table-striped">
        <thead>
            <th class="text-secondary">NOME</th>
            <th class="d-none d-md-table-cell text-secondary">TURMA</th>
            <th class="d-none d-md-table-cell text-secondary">CURSO</th>
            <th class="text-secondary">AÇÕES</th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nome }}</td>
                    <td class="d-none d-md-table-cell">{{ $item->turma }}</td>
                    <td class="d-none d-md-table-cell">{{ $item->curso->nome }}</td>
                    <td>
                        <form action="{{route('aluno.destroy', $item->id)}}" method="POST" id="form_{{$item->id}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#d9534f"
                                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2
                        0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0
                        0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1
                        .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection