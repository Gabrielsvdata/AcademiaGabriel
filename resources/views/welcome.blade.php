<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Início</title>
    @vite(['resources/sass/styles.scss'])
</head>
<body>
    <h1>Bem-vindo ao Sistema de Clientes</h1>
    <a href="{{ route('clientes.create') }}" class="btn">Cadastrar Cliente</a>
    <a href="{{ route('clientes.show') }}" class="btn">Visualizar Cadastros</a>
</body>
</html>
