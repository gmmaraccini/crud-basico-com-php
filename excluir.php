<?php

require_once("conexao.php");

if ($_GET) {
    $sql = "delete FROM pessoa where id = {$_GET['id']}";

    $mensagem = "Erro ao excluir o registro.";
    if ($conect->query($sql)) {
        $mensagem = "Sucesso ao excluir o registro.";
    }
}
?>

<html>
<body>
<title>Excluir registro</title>
</body>
<h2>Excluir registro.</h2>

Mensagem: <?php echo $mensagem; ?>

<br/>
<br/>
<br/>
<a href="index.php"> <button type="button">Voltar</button> </a>

</html>
