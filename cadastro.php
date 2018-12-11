<?php

$conect = mysqli_connect('localhost', 'root', '', 'introducao');

if ($conect->connect_errno) {
    die('Erro ao tentar conectar');
}

if ($_POST) {

    $sql = "insert into pessoa (id, nome, sobrenome, nascimento) values (null, '{$_POST['nome']}', '{$_POST['sobrenome']}', '{$_POST['nascimento']}')";

    $mensagem = "Ops erro ao tentar salvar o registro!";

    if ( $conect->query($sql) ) {
        $mensagem = "Registro salvo com sucesso!";
    }
}
?>

<html>
<body>
<title>Formulario Cadastro</title>
</body>
<h2>Formulario Cadastro.</h2>

<?php
    if (!empty($mensagem)) {
        echo $mensagem;
?>
    <br/>
    <br/>
    <br/>
    <a href="index.php"> <button type="button">Voltar</button> </a>

<?php
    die; }
?>
<form method="post" action="cadastro.php">
    <table>
        <tr>
            <td>
                Nome: <input name="nome" type="text" value="">
            </td>
        </tr>
        <tr>
            <td>
                sobrenome: <input name="sobrenome" type="text" value="">
            </td>
        </tr>
        <tr>
            <td>
                nascimento: <input name="nascimento" type="date" value="">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Salvar</button>
                <a href="index.php"> <button type="button">Voltar</button></a>
            </td>
        </tr>
    </table>

</form>
</html>
