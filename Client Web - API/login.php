<?php
session_start();
$username="joao";
$password="joao";
if (isset($_POST['username']) && isset($_POST['password']))
    if($username == $_POST['username'] && $password == $_POST['password']){
        echo("O username submetido foi: ".$_POST['username']."<br>");
        echo("O password submetido foi: ".$_POST['password']."<br>");
    $_SESSION['username']=$_POST['username'];
    header('location: https://www.youtube.com/watch?v=k-UvIuFDRKc')
    }
    else{
        echo("Autenticação FALHADA")
    }
?>

<!DOCTYPE html>
<html>
<body>

    <form>
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="username" id="form1Example1" class="form-control" />
        <label class="form-label" for="form1Example1">Username</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" id="form1Example2" class="form-control" />
        <label class="form-label" for="form1Example2">Password</label>
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
        <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
            <label class="form-check-label" for="form1Example3"> Remember me </label>
        </div>
        </div>

        <div class="col">
        <!-- Simple link -->
        <a href="#!">Forgot password?</a>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
    </form>

</body>
</html>


