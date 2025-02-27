<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guitarpy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="logo" href="logo.png"> <!--icone no canto da tela-->
</head>
<body>
    <div class="container">
        <!-- Logo e Menu -->
        <?php require_once 'menu.php'; ?>
        

        <div class="row my-4 card p-4 shadow">
            <h3>Cadastro de Produtos</h3>
            <form method="post" action="adm_prod.php">
                <div class="form-group">
                    <label>Nome: </label>
                    <input type="text" name="txt_nome" class="form-control">
                </div>
                <div class="form-group">
                    <label>Descrição: </label>
                    <input type="text" name="txt_descricao" class="form-control">
                </div>
                <div class="form-group">
                    <label>Preço: </label>
                    <input type="text" name="txt_preco" class="form-control">
                </div>
                <div class="form-group">
                    <label>Categoria: </label>
                    <input type="text" name="txt_categoria" class="form-control">
                </div>
                <input type="submit" value="Salvar" class="btn btn-primary mt-2">
            </form>
        </div>
        
        <!-- Rodapé -->
        <footer class="row bg-dark text-white text-center py-3">
            <div class="col-12">
                <p class="mb-0">&copy; 2025 Guitarpy. Todos os direitos reservados.</p>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>