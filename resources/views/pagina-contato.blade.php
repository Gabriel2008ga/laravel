<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato - Portal de Cursos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
              <a class="nav-link" href="{{route('pagina-principal')}}">Pagina principal</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('pagina-sobre')}}">sobre</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="#">Contato</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <!-- TITULO -->
    <div class="container text-center mt-5">
      <h1>Entre em Contato</h1>
      <p class="lead">Tem alguma dúvida sobre nossos cursos? Fale conosco.</p>
    </div>


    <!-- FORMULÁRIO -->
    <div class="container mt-5">

      <div class="row">

        <!-- FORM -->
        <div class="col-md-6">

          <h3>Envie uma mensagem</h3>

          <form>

            <div class="mb-3">
              <label class="form-label">Nome</label>
              <input type="text" class="form-control" placeholder="Digite seu nome">
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" placeholder="Digite seu email">
            </div>

            <div class="mb-3">
              <label class="form-label">Mensagem</label>
              <textarea class="form-control" rows="4" placeholder="Digite sua mensagem"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>

          </form>

        </div>


        <!-- INFORMAÇÕES -->
        <div class="col-md-6">

          <h3>Informações de Contato</h3>

          <p><strong>Email:</strong> contato@cursostech.com</p>
          <p><strong>Telefone:</strong> (11) 99999-9999</p>
          <p><strong>Endereço:</strong> Rua Exemplo, 123 - São Paulo</p>

          <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216" class="img-fluid rounded">

        </div>

      </div>

    </div>


    <!-- RODAPÉ -->
    <footer class="bg-dark text-white text-center p-3 mt-5">
      <p>© 2026 - Portal de Cursos</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09cYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

  </body>
</html>