<?php

$conect = mysqli_connect('localhost', 'root', '', 'introducao');

if ($conect->connect_errno) {
    die('Erro ao tentar conectar');
}


$sql = "SELECT * FROM pessoa";
$query = $conect->query($sql);

?>

<a href="cadastro.php"> <button type="button">Cadastrar uma nova pessoa</button> </a>
<br/>
<br/>
<table>
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>Nascimento</td>
    </tr>
    <?php while ($linha = mysqli_fetch_assoc($query)) { ?>

    <tr>
        <td><?php echo $linha['id'] ?></td>
        <td><?php echo $linha['nome'] ?></td>
        <td><?php echo $linha['sobrenome'] ?></td>
        <td><?php echo implode('/', array_reverse(explode('-', $linha['nascimento']))) ?></td>
        <td><a href="formulario.php?id=<?php echo $linha['id'] ?>"><button>Editar</button></a></td>
        <td><a href="excluir.php?id=<?php echo $linha['id'] ?>"><button>Excluir</button></a></td>
    </tr>

    <?php } ?>
</table>
