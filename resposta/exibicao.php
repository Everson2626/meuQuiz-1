<html>
<head>
  <title>responder</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <meta charset="utf-8">
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../estilo/estilo.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-sm">
  <div class="container">
    <a class="navbar-brand" href="../principal/principal.php">
      <span class="logo">MEU</span>quiz</a>
    <button class="navbar-toggler">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="../quiz/cadastro.php"> CRIAR </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../login/login.php">SAIR </a>
        </li>
      </ul>
      <form class="form-inline my-3 pt-2 my-lg-0">
        <input class="form-control mr-sm-2" placeholder="Pesquisar...">
        <button class="btn btn-white mb-2" type="submit">
          <i class="fa fa-search"></i>
        </button>
        <h6 class="user-name" href="../login/login.php">LUCAS </h6>
      </form>
    </div>
  </div>
</nav>

<div class="container mt-70">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <div class="btn-toolbar position-questions">
        <div class="btn-group mr-1">
          <button type="button" class="btn btn-position">1</button>
        </div>
        <div class="btn-group mr-1 active">
          <button type="button" class="btn btn-position active">2</button>
        </div>
        <div class="btn-group mr-1">
          <button type="button" class="btn btn-position">3</button>
        </div>
        <div class="btn-group mr-1">
          <button type="button" class="btn btn-position">4</button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-position">5</button>
        </div>
      </div>

      <img class="w-100"
           src="https://wallpaperaccess.com/full/515948.jpg"
           height="300"/>
          <div class="title-quiz">
              Qual dessas virtudes voce considera a mais importante?
          </div>
      <div class="answer-quiz">
        <button class="btn-answer">Inteligência</button>
        <button class="btn-answer">Coragem</button>
        <button class="btn-answer">Bondade</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
