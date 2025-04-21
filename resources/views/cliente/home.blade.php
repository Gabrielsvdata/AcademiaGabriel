<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Início - Gabriel GYM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            background: #ffffff;
            padding: 50px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-weight: 700;
            margin-bottom: 30px;
        }

        .btn-custom {
            padding: 12px 25px;
            font-size: 1.1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100">

    <div class="card-custom text-center">
        <h1>Bem-vindo ao <span class="text-primary">Gabriel GYM</span></h1>

        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-custom">Cadastrar Cliente</a>

            @if ($cliente)
                <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-success btn-custom">Visualizar Cadastro</a>
            @else
                <button class="btn btn-secondary btn-custom" disabled>Nenhum cliente cadastrado</button>
            @endif
        </div>
    </div>

</body>
</html>
