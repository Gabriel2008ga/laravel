<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f9;
    }

    .form-container {
        width: 100%;
        max-width: 400px;
        margin: 50px auto;
        background: #fff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
        transition: 0.3s;
    }

    input:focus {
        border-color: #4CAF50;
        outline: none;
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.3);
    }

    button {
        width: 100%;
        padding: 10px;
        background: #4CAF50;
        border: none;
        border-radius: 6px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: #45a049;
    }

    .success {
        margin-top: 15px;
        padding: 10px;
        background: #e6ffed;
        color: #2e7d32;
        border-radius: 6px;
        text-align: center;
    }
</style>

<div class="form-container">
    <h2>Cadastro de Aluno</h2>

    <form action="{{ route('aluno.adicionar') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite o e-mail">
        </div>

        <button type="submit">Salvar</button>

        @isset($sucesso)
            <div class="success">
                {{ $sucesso }}
            </div>
        @endisset
    </form>
</div>