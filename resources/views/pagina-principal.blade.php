<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site de Cursos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">CursosTech</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ms-auto">

            <li class="nav-item">
              <a class="nav-link" href="#ds">Desenvolvimento de Sistemas</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#adm">Administração</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#amb">Meio Ambiente</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#far">Farmácia</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('pagina-sobre')}}">sobre</a>
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
      <h1>Bem-vindo ao Portal de Cursos</h1>
      <p>Escolha um curso e comece sua carreira profissional.</p>
    </div>


    <!-- CURSOS -->
    <div class="container mt-5">

      <div class="row">

        <!-- Desenvolvimento de Sistemas -->
        <div class="col-md-3" id="ds">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Desenvolvimento de Sistemas</h5>
              <p class="card-text">
                Aprenda programação, criação de sites, aplicativos e bancos de dados.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Administração -->
        <div class="col-md-3" id="adm">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Administração</h5>
              <p class="card-text">
                Aprenda gestão de empresas, liderança, marketing e planejamento estratégico.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Meio Ambiente -->
        <div class="col-md-3" id="amb">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Meio Ambiente</h5>
              <p class="card-text">
                Estude sustentabilidade, preservação ambiental e gestão de recursos naturais.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Farmácia -->
        <div class="col-md-3" id="far">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1580281657527-47c95c7caa7f" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Farmácia</h5>
              <p class="card-text">
                Conheça medicamentos, análises laboratoriais e práticas farmacêuticas.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
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