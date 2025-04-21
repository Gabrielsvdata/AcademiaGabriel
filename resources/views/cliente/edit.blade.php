<!-- resources/views/cliente/edit.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ old('nome', $cliente->nome) }}">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $cliente->email) }}">
        </div>

        <div>
            <label for="altura">Altura:</label>
            <input type="text" id="altura" name="altura" value="{{ old('altura', $cliente->altura) }}">
        </div>

        <div>
            <label for="peso">Peso:</label>
            <input type="text" id="peso" name="peso" value="{{ old('peso', $cliente->peso) }}">
        </div>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('clientes.index') }}">Voltar para a lista</a>
</body>
</html>
