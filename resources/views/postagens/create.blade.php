<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nova Postagem</title>
    <style>
        /* Estilo simples para ocultar os elementos quando não houver imagem */
        .preview-container {
            display: none;
            margin-top: 10px;
            margin-bottom: 15px;
        }
        #preview-imagem {
            max-width: 200px;
            display: block;
            margin-bottom: 5px;
        }
    </style>
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
        <!-- Adicionado um ID para o JavaScript mapear o input -->
        <input type="file" name="imagem" id="input-imagem"><br>

        <!-- Container da pré-visualização e do botão de cancelar -->
        <div id="container-preview" class="preview-container">
            <img id="preview-imagem" src="#" alt="Pré-visualização">
            <button type="button" id="btn-remover">Remover Imagem</button>
        </div>
        <br>

        <button type="submit">Postar</button>

    </form>

    <script>
        const inputImagem = document.getElementById('input-imagem');
        const containerPreview = document.getElementById('container-preview');
        const previewImagem = document.getElementById('preview-imagem');
        const btnRemover = document.getElementById('btn-remover');

        // Mostra a imagem quando o usuário seleciona um arquivo
        inputImagem.addEventListener('change', function() {
            const arquivo = this.files[0];
            
            if (arquivo) {
                const leitor = new FileReader();
                
                leitor.onload = function(e) {
                    previewImagem.src = e.target.result;
                    containerPreview.style.display = 'block';
                }
                
                leitor.readAsDataURL(arquivo);
            }
        });

        // Limpa o input e esconde a pré-visualização ao clicar em Remover
        btnRemover.addEventListener('click', function() {
            inputImagem.value = ''; // Limpa o arquivo selecionado
            previewImagem.src = '#';
            containerPreview.style.display = 'none';
        });
    </script>

</body>
</html>
