<?php 
    session_start(); /* Starts the session */

    if(!isset($_SESSION['UserData']['Username'])){
        header("location:../../login.php");
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
            body{
                text-align: center;
            }
        </style>
        <title>Fumo</title>
    </head>

    <nav>
        <div class="ini">
            <h1>Pagina inicial</h1>
            <a href="../hub_apps.php">
                <button type="submit">
                    <img src="../../img/bee.jpg" alt="buttonpng" width="150" height="150" />
                </button>
            </a>
        </div>
    </nav>
    
    <body>
        <br>
        <h2>Monitor de funmo</h2>
        <h4>Nivel de fumo atual</h4>
        <p>
            <?php
                echo $valorHumidade = file_get_contents("../../db/SSS/valor.txt"). '%';
            ?>
        </p>

        <h4>Ultima atualização</h4>
        <p>
            <?php
                echo $dataHumidade = file_get_contents("../../db/SSS/hora.txt");
            ?>
        </p>

        <h4>Ultimas 5 atualizações</h4>
        <p>
            <?php
                //echo (nl2br(file_get_contents("../../db/TSS\log.txt")));
                $lines = file("../../db/SSS\log.txt");
                $size = sizeof($lines);

                echo (nl2br($lines[$size-1]));
                echo (nl2br($lines[$size-2]));
                echo (nl2br($lines[$size-3]));
                echo (nl2br($lines[$size-4]));
                echo (nl2br($lines[$size-5]));

            ?>
        </p>
        <a href="../../db/SSS/log.txt">
            <p>
                Clique aqui para ver a log completa
            </p>
        </a>
    </body>
</html>
