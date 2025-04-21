<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <!-- Botão para voltar para a home -->
            <a href="{{ url('/') }}" class="btn btn-primary">Voltar para a Home</a>
        </div>

        <h1 class="mb-4">Cadastrar Novo Cliente</h1>

        <form action="{{ route('clientes.store') }}" method="POST" class="card p-4 shadow-sm">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="altura" class="form-label">Altura (m):</label>
                <input type="number" name="altura" id="altura" step="0.01" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="peso" class="form-label">Peso (kg):</label>
                <input type="number" name="peso" id="peso" step="0.1" class="form-control" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </div>
</body>
</html>
