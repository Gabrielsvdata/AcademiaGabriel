<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <!-- Botão para voltar para a home -->
        <div class="d-flex justify-content-between mb-4">
            <a href="{{ url('/') }}" class="btn btn-primary">Voltar para a Home</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3>Detalhes do Cliente</h3>
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $cliente->id }}</p>
                <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
                <p><strong>Email:</strong> {{ $cliente->email }}</p>
                <p><strong>Altura:</strong> {{ $cliente->altura }} m</p>
                <p><strong>Peso:</strong> {{ $cliente->peso }} kg</p>
                <p><strong>Cadastrado em:</strong> {{ $cliente->created_at->timezone('America/Sao_Paulo')->format('d/m/Y H:i') }}</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
            </div>
        </div>
    </div>
</body>
</html>
