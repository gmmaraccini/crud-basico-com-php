<?php

$conect = mysqli_connect('localhost', 'root', '', 'introducao');

if ($conect->connect_errno) {
    die('Erro ao tentar conectar');
}

if ($_GET) {
    $sql = "SELECT * FROM pessoa where id = {$_GET['id']}";

    $query = $conect->query($sql);
    $data = $query->fetch_assoc();
} elseif ($_POST) {

    $sql = "update pessoa set nome = '{$_POST['nome']}', sobrenome = '{$_POST['sobrenome']}', nascimento = '{$_POST['nascimento']}' where id = {$_POST['id']}";

    $query = $conect->query($sql);

    $sql = "SELECT * FROM pessoa where id = {$_POST['id']}";

    $query = $conect->query($sql);
    $data = $query->fetch_assoc();
}
?>

<html>
<body>
<title>Formulario Edição</title>
</body>
<h2>Formulario Editar.</h2>

<form method="post" action="formulario.php">
    <table>
        <tr>
            <td>
                Id: <?php echo $data['id'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Nome: <input name="nome" type="text" value="<?php echo $data['nome'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                sobrenome: <input name="sobrenome" type="text" value="<?php echo $data['sobrenome'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                nascimento: <input name="nascimento" type="date" value="<?php echo $data['nascimento'] ?>">
            </td>
        </tr>
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <tr>
            <td>
                <button type="submit">Salvar</button>
                <a href="index.php"> <button type="button">Voltar</button></a>
            </td>
        </tr>
    </table>

</form>
</html>
