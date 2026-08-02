<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nova Postagem</title>
</head>
<body>

    <h1>Nova Postagem</h1>

    <form action="{{ route('postagens.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>Título</label><br>
        <input type="text" name="titulo"><br><br>

        <label>Comentário</label><br>
        <textarea name="comentario" rows="5"></textarea><br><br>

        <label>Imagem</label><br>
        <input type="file" name="imagem"><br><br>

        <button type="submit">Postar</button>

    </form>

</body>
</html>