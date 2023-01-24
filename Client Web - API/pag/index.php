<?php 
    session_start(); /* Starts the session */

    if(!isset($_SESSION['UserData']['Username'])){
        header("location:../login.php");
        exit;
    }
?>

<!DOCTYPE html>
<meta http-equiv="refresh" content="2" <!--- refresh auto--->
<html>
    <head>
        <style>
            nav {
                float: left;
                width: auto;
                height: 600px; /* only for demonstration, should be removed */
                background: #ccc;
                padding: 20px;
            }
            .ini{
                text-align: center;
            }
            .apps{
                text-align: center;
            }
            img.apps-inner{
                width: 80px;
                height: auto;
            }
        </style>
        <title>Projeto bee-holder</title>
    </head>

    <nav>
        <div class="ini">
            <h1>Pagina inicial</h1>
            <a href="../index.html">
                <button type="submit">
                    <img src="../img/bee.jpg" alt="buttonpng" width="150" height="150" />
                </button>
            </a>
        </div>
    </nav>

    <body>
        <br>
        <br>
        <div class="apps">
            <p>Após usares não te esqueças de dar <a href="../logout.php">logout</a>!</p>
            <h1>Aplicações Integradas</h1>
            <a href=".\hub_apps.php">
                <button type="submit">
                    <img src="../img/SBC.png" alt="buttonpng" class="apps-inner"/>
                </button>
            </a>

            <h2>Log da camera</h2>
            <a href=".\cam_log.php">
                <button type="submit">
                    <img src="../img/cam.png" alt="buttonpng" class="apps-inner"/>
                </button>
            </a>
        </div>
    </body>
<html>