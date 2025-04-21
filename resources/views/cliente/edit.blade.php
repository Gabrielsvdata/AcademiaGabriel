<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #e0eafc);
            font-family: 'Montserrat', sans-serif;
        }

        .card-custom {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 40px auto;
        }

        h1 {
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-label {
            font-weight: 600;
        }

        .btn-custom {
            border-radius: 8px;
            padding: 10px 20px;
        }

        .btn-voltar {
            margin-top: 15px;
            display: inline-block;
        }
    </style>
</head>
<body>

    <div class="card-custom">
        <h1>Editar Cliente</h1>

        <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome', $cliente->nome) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $cliente->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="altura" class="form-label">Altura (m):</label>
                <input type="text" id="altura" name="altura" class="form-control" value="{{ old('altura', $cliente->altura) }}" required>
            </div>

            <div class="mb-3">
                <label for="peso" class="form-label">Peso (kg):</label>
                <input type="text" id="peso" name="peso" class="form-control" value="{{ old('peso', $cliente->peso) }}" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-custom">Salvar Alterações</button>
            </div>
        </form>

        <a href="{{ route('clientes.index') }}" class="btn btn-secondary btn-custom btn-voltar">Voltar para a Lista</a>
    </div>

</body>
</html>
