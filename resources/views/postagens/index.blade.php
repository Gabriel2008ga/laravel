<h1>Postagens</h1>

<a href="{{ route('postagens.create') }}">Nova Postagem</a>

<hr>

@foreach($postagens as $postagem)
    <div style="margin-bottom: 20px;">
        <p><strong>Postado por:</strong> {{ $postagem->user->name ?? 'Anônimo' }}</p>

        <h2>{{ $postagem->titulo }}</h2>

        <p>{{ $postagem->comentario }}</p>

        @if($postagem->imagem)
            <img src="{{ asset('storage/' . $postagem->imagem) }}" alt="Imagem da postagem" width="200">
            <br>
        @endif

        <a href="{{ route('postagens.edit', $postagem) }}">Editar</a>

        <form action="{{ route('postagens.destroy', $postagem) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </div>
    <hr>
@endforeach