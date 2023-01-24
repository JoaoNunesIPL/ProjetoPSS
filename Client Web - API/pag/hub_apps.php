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
            div.gallery {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 180px;
                text-align: center;
            }

            div.gallery:hover {
                border: 1px solid #777;
            }
            div.gallery img {
                width: 100%;
                height: auto;
            }
            div.desc {
                padding: 15px;
                text-align: center;
            }
            body{
                width: 800px;
            }
        </style>
        <title>Hub de aplicações</title>
    </head>

    <nav>
        <div class="ini">
            <h1>Pagina inicial</h1>
            <a href="./index.php">
                <button type="submit">
                    <img src="../img/bee.jpg" alt="buttonpng" width="150" height="150" />
                </button>
            </a>
        </div>
    </nav>
    
    <body>
        <div class="gallery">
            <a href="./cont/temp.php">
                <img src="../img/temp.png" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Temperatura</div>
        </div>

        <div class="gallery">
            <a href="./cont/lum.php">
                <img src="../img/lumi.png" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Luminuzidade</div>
        </div>

        <div class="gallery">
            <a href="./cont/movi.php">
                <img src="../img/movi.png" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Movimento</div>
        </div>

        <div class="gallery">
            <a href="./cont/hum.php">
                <img src="../img/humi.png" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Humidade</div>
        </div>

        <div class="gallery">
            <a href="./cont/fumo.php">
                <img src="../img/fumo.png" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Fumo</div>
        </div>

        <div class="gallery">
            <a href="./cont/agua.php">
                <img src="../img/agua.png" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">Detetor de agua</div>
        </div>
    </body>
</html>
