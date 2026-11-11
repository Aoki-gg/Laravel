<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f9f9f9; }
        .container { max-width: 600px; background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; color: #333; }
        input[type="text"], input[type="email"], input[type="date"], input[type="number"] {
            width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;
        }
        button { background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #0056b3; }
    </style>
</head>
<body>

    <div class="container">
        <h2>Cadastrar Novo Aluno</h2>

        <!-- O formulário aponta para a rota 'store' utilizando o método POST -->
        <form action="{{ route('aluno.store') }}" method="POST">
            @csrf <!-- Obrigatório no Laravel para proteger contra ataques CSRF -->

            <!-- Campos referentes à tabela PESSOA -->
            <fieldset style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px; border-radius: 4px;">
                <legend style="font-weight: bold; color: #555;">Dados Pessoais</legend>

                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                </div>

                <div class="form-group">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" required>
                </div>

                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" required>
                </div>
            </fieldset>

            <!-- Campos referentes à tabela ALUNO (Vínculo acadêmico) -->
            <fieldset style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px; border-radius: 4px;">
                <legend style="font-weight: bold; color: #555;">Dados Acadêmicos</legend>

                <div class="form-group">
                    <label for="curso_id">ID do Curso:</label>
                    <input type="number" id="curso_id" name="curso_id" placeholder="Ex: 1" required>
                </div>
            </fieldset>

            <button type="submit">Salvar Cadastro</button>
        </form>
    </div>

</body>
</html>