<?php
$conect = mysqli_connect('localhost', 'root', '', 'introducao');

if ($conect->connect_errno) {
    die('Erro ao tentar conectar');
}
