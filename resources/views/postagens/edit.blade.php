<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Postagem</title>
</head>
<body>
    <h2>Editar Postagem</h2>

    <form action="{{ route('postagens.update', ['postagem' => $postagem->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="titulo">Título:</label><br>
            <input type="text" id="titulo" name="titulo" value="{{ $postagem->titulo }}" required>
        </div>

        <br>

        <div>
            <label for="comentario">Comentário:</label><br>
            <textarea id="comentario" name="comentario" rows="4" required>{{ $postagem->comentario }}</textarea>
        </div>

        <br>

        <div>
            <label for="imagem">Imagem (deixe em branco para não mudar):</label><br>
            @if($postagem->imagem)
                <p>Imagem atual:</p>
                <img src="{{ asset('storage/' . $postagem->imagem) }}" width="100">
                <br><br>
            @endif
            <input type="file" id="imagem" name="imagem" accept="image/*">
        </div>

        <br>

        <button type="submit">Salvar Alterações</button>
        <a href="{{ route('postagens.index') }}">Cancelar</a>
    </form>
</body>
</html>