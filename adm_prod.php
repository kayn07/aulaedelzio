<?php 
    $nome=$_POST['txt_nome'];
    $descricao=$_POST['txt_descricao'];
    $preco=$_POST['txt_preco'];
    $categoria=$_POST['txt_categoria'];
    echo("O nome é ".$nome);
    echo("<hr>");
    echo("A desc é ".$descricao);
    echo("<hr>");
    echo("A preço é ".$preco);
    echo("<hr>");
    echo("A categoria é ".$categoria);
?>