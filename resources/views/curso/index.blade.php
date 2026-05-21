<div>

    <form action="{{ route('curso.add') }}" method="post">

        @csrf

        <label>Nome</label>
        <input type="text" name="nome">
        
        <label>Período</label>
        <input type="text" name="periodo">


        <button type="submit">Salvar</button>

    </form>

    @isset($success)

        <h3>{{ $success }}</h3>

    @endisset

    

    @isset($cursos)

        @foreach($cursos as $curso)

            <h3>
                {{ $curso->nome }},{{ $curso->periodo }}
         
            
            </h3>

        @endforeach

    @endisset

</div>