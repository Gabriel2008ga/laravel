<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sobre - Portal de Cursos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">CursosTech</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('pagina-principal')}}">pagina principal</a>
            </li>


           <li class="nav-item">
              <a class="nav-link" href="{{route('pagina-contato')}}">contato</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <!-- TITULO -->
    <div class="container text-center mt-5">
      <h1>Sobre o Portal de Cursos</h1>
      <p class="lead">Conheça nosso projeto educacional.</p>
    </div>


    <!-- SOBRE -->
    <div class="container mt-5">

      <div class="row align-items-center">

        <div class="col-md-6">
          <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644" class="img-fluid rounded">
        </div>

        <div class="col-md-6">
          <h3>Nossa Missão</h3>
          <p>
            O Portal de Cursos foi criado com o objetivo de oferecer
            formação profissional em diversas áreas do conhecimento.
            Nosso foco é ajudar estudantes a desenvolver habilidades
            importantes para o mercado de trabalho.
          </p>

          <p>
            Os cursos disponíveis incluem áreas como
            <strong>Desenvolvimento de Sistemas</strong>,
            <strong>Administração</strong>,
            <strong>Meio Ambiente</strong> e
            <strong>Farmácia</strong>.
          </p>

          <p>
            Através de conteúdos modernos e professores qualificados,
            buscamos preparar os alunos para os desafios do futuro.
          </p>
        </div>

      </div>

    </div>


    <!-- SEÇÃO CURSOS -->
    <div class="container mt-5">

      <h2 class="text-center mb-4">Áreas de Estudo</h2>

      <div class="row text-center">

        <div class="col-md-3">
          <h5>Desenvolvimento de Sistemas</h5>
          <p>Aprenda programação, criação de sites e aplicativos.</p>
        </div>

        <div class="col-md-3">
          <h5>Administração</h5>
          <p>Estude gestão de empresas e liderança.</p>
        </div>

        <div class="col-md-3">
          <h5>Meio Ambiente</h5>
          <p>Conheça práticas sustentáveis e preservação ambiental.</p>
        </div>

        <div class="col-md-3">
          <h5>Farmácia</h5>
          <p>Aprenda sobre medicamentos e análises laboratoriais.</p>
        </div>

      </div>

    </div>


    <!-- RODAPÉ -->
    <footer class="bg-dark text-white text-center p-3 mt-5">
      <p>© 2026 - Portal de Cursos</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>