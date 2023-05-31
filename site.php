<!DOCTYPE html PUBLIC
"-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['password']) == true))
{
  header('location:index.php');
  }

$logado = $_SESSION['login'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA WEB</title>
</head>

<body>
<table width="100%" height="748" border="1">
  <tr>
    <td height="90" colspan="2" text-align="center" bgcolor="#F2D5DB">
    <?php
  echo" Bem vindo $logado";
  ?>
    </td>
  </tr>
  <tr>
    <h1><td width="500" text-align="center" height="410" bgcolor="#F2C9D4">MENU AQUI</td></h1>
   <div><td width="546"  text-align="center">CONTEÚDO E ÍCONES AQUI</td> </div>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#F2AEC1"> </td>
  </tr>
</table>
</body>
</html>