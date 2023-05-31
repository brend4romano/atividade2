<?php

session_start();

$login = $_POST['login'];
$senha = $_POST['password'];

 

$ligacao = new PDO('mysql:host=localhost;dbname=Site3', 'root','etec');
print 'Conexão efetuada';

$pesquisa = $ligacao -> prepare("SELECT * FROM users WHERE nome = :login And senha = :password ");

$pesquisa -> bindParam(':login', $login);
$pesquisa -> bindParam(':password', $senha);
$pesquisa -> execute();

$brenda = $pesquisa -> fetch(PDO:: FETCH_ASSOC);


if($brenda)
{
$_SESSION['login'] = $login;
$_SESSION['password'] = $senha;
header('location:site.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['password']);
  header('location:index.php');

  }

?>
