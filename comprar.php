<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitarpy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> <!-- Ícones do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" type="logo" href="logo.png"> <!--icone no canto da tela-->
    <link rel="stylesheet" href="styles.css">
    <script src="scru.js"></script>
  <!-- Link para o Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <div class="container">
    <!--config.html-inicio-->
    <button class="botao-configuracoes">
      <span class="icone">⚙️</span> Configurações
      <div class="dropdown-content">
        <a href="cadastrar.html"><i class="fas fa-user-plus"></i> Cadastrar</a>
        <a href="login.html"><i class="fas fa-sign-in-alt"></i> Login</a>
        <a href="javascript:void(0)" onclick="alterarTema()">
          <i id="themeIcon" class="fas fa-sun"></i> Alterar Tema
        </a>
      </div>
    </button>
    <!--config.html-fim-->

    <!--tema.css-inicio-->
    <style>
      body.light-mode {
        background-color: #f0f0f0;
        color: #333;
      }
      body.dark-mode {
        background-color: #333;
        color: #f0f0f0;
      }
      .icone {
        margin-right: 10px;
        font-size: 1.2rem;
      }
      .fa-sun, .fa-moon {
        margin-right: 10px;
      }
    </style>
  </head>
  <!--tema.css-fim-->
  <body class="light-mode">

    <!--tema.js-inicio-->
    <script>
      function alterarTema() {
        var body = document.body;
        var themeIcon = document.getElementById('themeIcon');
        if (body.classList.contains('light-mode')) {
          body.classList.remove('light-mode');
          body.classList.add('dark-mode');
          themeIcon.classList.remove('fa-sun');
          themeIcon.classList.add('fa-moon');
        } else {
          body.classList.remove('dark-mode');
          body.classList.add('light-mode');
          themeIcon.classList.remove('fa-moon');
          themeIcon.classList.add('fa-sun');
        }
      }
    </script>
    <!--tema.js-fim-->
  </body>
  
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }
            .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: #24292e;
                padding: 15px 500px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            .navbar .brand {
                font-size: 1.8em;
                font-weight: bold;
                color: #fff;
            }
            .navbar .links {
                display: flex;
                gap: 20px;
            }
            .navbar .links a {
                color: #fff;
                text-decoration: none;
                padding: 10px 15px;
                transition: background-color 0.3s, transform 0.3s;
                border-radius: 5px;
            }
            .navbar .links a:hover {
                background-color: #0070f3;
                transform: scale(1.1);
            }
        </style>
    </head>
    <body>
        <nav class="navbar">
            <div class="brand">Teste</div>
            <div class="links">
                <a href="index.html">Home</a>
                <a href="sobre.html">Sobre</a>
                <a href="#services">Serviços</a>
                <a href="#contact">Contato</a>
            </div>
        </nav>
    </body>

        <!-- Barra de pesquisa à direita com ícone de lupa -->
        <div class="row search-container py-3">
            <div class="col-12 text-end">
                <div class="input-group">
                    <input type="text" id="searchInput" class="form-control search-bar" placeholder="Pesquise por produtos..." onkeyup="filterProducts()">
                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>
                </div>
            </div>
        </div>
        <!-- Barra de pesquisa à direita com ícone de lupa -->

        <!-- Logo e Menu -->
        <div class="row py-3 align-items-center black">
            <div class="col-md-2">
                
            </div>
            <div class="col-md-10 d-flex justify-content-end">
                <nav>
                    <a href="index.php" class="btn btn-primary mx-1">Home</a>
                    <a href="produtos.php" class="btn btn-secondary mx-1">Produtos</a>
                    <a href="categorias.php" class="btn btn-info mx-1">Categorias</a>
                    <a href="#" class="btn btn-info mx-1">Imagens</a>
                    <a href="#" class="btn btn-danger mx-1">Contato</a>
                </nav>
            </div>
        </div>
        <!-- Logo e Menu -->

        <!--btn-pg_inicio-->
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-2" role="group" aria-label="First group">
              <button type="button" class="btn btn-secondary" onclick="window.location.href='#'">1</button>
              <button type="button" class="btn btn-secondary" onclick="window.location.href='#'">2</button>
              <button type="button" class="btn btn-secondary" onclick="window.location.href='#'">3</button>
              <button type="button" class="btn btn-secondary" onclick="window.location.href='#'">4</button>
            </div>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
              <button type="button" class="btn btn-secondary" onclick="window.location.href='#'">5</button>
              <button type="button" class="btn btn-secondary" onclick="window.location.href='#'">6</button>
              <button type="button" class="btn btn-secondary" onclick="window.location.href='#'">7</button>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
              <button type="button" class="btn btn-secondary" onclick="window.location.href='#'">8</button>
            </div>
          </div>
        <!--btn-pg_fim-->
        
        <!--rodape_inicio-->
        <footer class="row text-center py-3">
            <div class="col-12">
                <p class="mb-0">&copy; 2025 Guitarpy. Todos os direitos reservados.</p>
            </div>
        </footer>
    </div>
        <!--rodape_fim-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>