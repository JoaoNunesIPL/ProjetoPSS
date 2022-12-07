<?php
session_start();

$username="joao";
$password="1234";

if (isset($_POST['username']) && isset($_POST['password']))
    if($username == $_POST['username'] && $password == $_POST['password']){
        echo("O username submetido foi: ".$_POST['username']."<br>");
        echo("O password submetido foi: ".$_POST['password']."<br>");
    $_SESSION['username']=$_POST['username'];
    header('location: https://www.youtube.com/watch?v=k-UvIuFDRKc');
    }
    else{
        echo("Autenticação FALHADA");
    }
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="./Style/styleLOGIN.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="./bee.jpg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Voltar a pagina inicial -->
    <div id="formFooter">
      <a class="underlineHover" href="../index.html">Pagina inicial</a>
    </div>

  </div>
</div>

</body>
</html> 