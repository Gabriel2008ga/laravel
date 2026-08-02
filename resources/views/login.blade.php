<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login Simplificado</title>
</head>
<body>
    <h2>Entrar no Sistema</h2>

    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome:</label><br>
            <input type="text" id="name" name="name" required>
        </div>
        <br>
        <div>
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" required>
        </div>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>