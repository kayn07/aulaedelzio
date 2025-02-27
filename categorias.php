<?php
    require_once 'banco.php';
    $categorias = listarCategorias();
?>

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
            <h3>Cadastro de Categorias</h3>

            <?php if (isset($_GET['msg'])==true): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Preencha coretamente os campos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <form method="post" action="adm_cat.php">
                <div class="form-group">
                    <label>Nome: </label>
                    <input type="text" name="txt_nome" class="form-control">
                </div>
                <div class="form-group">
                    <label>Descrição: </label>
                    <input type="text" name="txt_descricao" class="form-control">
                </div>
                <input type="submit" value="Salvar" class="btn btn-primary mt-2">
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($categorias)): ?>
                        <tr>
                            <td colspan="3" class="text-center">Nenhuma categoria encontrada</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($categorias as $categoria): ?>
                        <tr>
                            <td><?php echo $categoria['id']; ?></td>
                            <td><?php echo $categoria['nome']; ?></td>
                            <td><?php echo $categoria['descricao']; ?></td>
                            <td><a href="adm_cat.php?id=<?php echo $categoria['id']; ?>" class="btn btn-danger">Excluir</a></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
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