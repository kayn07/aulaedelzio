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
    <!-- Link para o Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="script.js"></script> <!--nao tirar, se nao o tema nao muda-->
    <!-- Botão para alternar o tema -->
      <style>
            body {
                font-family: 'Poppins', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }
            .navbar {
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #24292e;
                width: 100%;
                height: 60px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                position: fixed;
                top: 0;
                z-index: 1000;
            }
            .navbar .brand {
                position: absolute;
                left: 10px;
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
                background-color: #640fda;
                transform: scale(1.1);
            }
        </style>


    </head>
<body>
      <!-- Barra de pesquisa à direita com ícone de lupa -->
        <nav class="navbar">
            <div class="brand">Guitarpy</div>
            <input type="text" id="searchInput" class="form-control search-bar" placeholder="Pesquise por produtos..." onkeyup="filterProducts()">
            <span class="input-group-text">
                <i class="bi bi-search"></i>
            </span>
            </div>
            <div class="links">
                <a href="index.php">Home</a>
                <a href="produtos.php">Produtos</a>
                <a href="categorias.php">Categorias</a>
                <a href="#">Imagens</a>
                <a href="#">Contato</a>
            </div>
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
        </nav>
          <!-- Barra de pesquisa à direita com ícone de lupa -->

        <!-- Banner -->
        <div class="container">
        <!-- Banner -->

        <!-- nao tirar -->
        <div class="row py-3 align-items-center black">
            <div class="col-md-2">
            </div>
            <div class="col-md-10 d-flex justify-content-end">
            </div>
        </div>
        <!-- nao tirar -->

        <!-- Cards de Produtos -->
        <div class="row my-4" id="product-list">
            <div class="col-md-4 mb-4 product-card">
                <div class="card">
                    <img src="pd/p1.webp" class="card-img-top" alt="Produto 1">
                    <div class="card-body">
                        <h5 class="card-title">Guitarra Ibanez Black flat</h5>
                        <p class="card-text">Guitarra elétrica Ibanez RG GIO GRG121DX soloist de choupo black flat com diapasão de amaranto</p>
                        <p class="card-text">R$ 2.532,21</p>
                        <a href="comprar.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 product-card">
                <div class="card">
                    <img src="pd/p2.PNG" class="card-img-top" alt="Produto 2">
                    <div class="card-body">
                        <h5 class="card-title">Guitarra Ibanez Aqua burst</h5>
                        <p class="card-text">Guitarra Ibanez Super Strato GIO GRGR221PA</p>
                        <p class="card-text">R$ 2.864,87</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 product-card">
                <div class="card">
                    <img src="pd/p3.PNG" class="card-img-top" alt="Produto 3">
                    <div class="card-body">
                        <h5 class="card-title">Transparent brown</h5>
                        <p class="card-text">Guitarra elétrica Tagima Signature Series JA-3 de amieiro transparent brown</p>
                        <p class="card-text">Guitarra elétrica Tagima Signature Series JA-3 de amieiro transparent brown com diapasão de madeira técnica</p>
                        <p class="card-text">R$ 2.052</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 product-card">
                <div class="card">
                    <img src="pd/p4.webp" class="card-img-top" alt="Produto 4">
                    <div class="card-body">
                        <h5 class="card-title">Guitarra elétrica Cort KX507 de mogno star dust green</h5>
                        <p class="card-text">Guitarra elétrica Cort KX507 de mogno star dust green com diapasão de ébano</p>
                        <p class="card-text">R$ 6.709,31</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 product-card">
                <div class="card">
                    <img src="pd/p5.webp" class="card-img-top" alt="Produto 5">
                    <div class="card-body">
                        <h5 class="card-title">Guitarra Les Paul Strinberg Lps260 Tos Tobacco Satin Eletric</h5>
                        <p class="card-text">Guitarra Les Paul Strinberg Lps260 Tos Tobacco Satin Eletric Material do diapasão Pau-rosa Orientação da mão Destro</p>
                        <p class="card-text">R$ 1.579,70</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 product-card">
                <div class="card">
                    <img src="pd/p6.webp" class="card-img-top" alt="Produto 6">
                    <div class="card-body">
                        <h5 class="card-title">Guitarra Elétrica Sg De Madeira Maciça Thomaz Teg 340 Azul</h5>
                        <p class="card-text">R$ 150,99</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 product-card">
                <div class="card">
                    <img src="pd/p7.webp" class="card-img-top" alt="Produto 7">
                    <div class="card-body">
                        <h5 class="card-title">#</h5>
                        <p class="card-text">R$ 150,99</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 product-card">
                <div class="card">
                    <img src="dragonballkkakarot-1-u0iivues9x.webp" class="card-img-top" alt="Produto 8">
                    <div class="card-body">
                        <h5 class="card-title">#</h5>
                        <p class="card-text">R$ 150,99</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 product-card">
                <div class="card">
                    <img src="zelda.jpg" class="card-img-top" alt="Produto 9">
                    <div class="card-body">
                        <h5 class="card-title">#</h5>
                        <p class="card-text">R$ 300</p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cards de Produtos -->

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
