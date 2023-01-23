<?php 
    session_start(); /* Starts the session */

    if(!isset($_SESSION['UserData']['Username'])){
        header("location:../login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                text-align: center;
                margin-top: 0px;
            }
            nav {
                float: left;
                width: auto;
                height: 600px; /* only for demonstration, should be removed */
                background: #ccc;
                padding: 20px;
            }   
        </style>
        <title>Logs do sensor de movimento</title>
    </head>

    <nav>
        <h1>Pagina inicial</h1>
        <a href="./index.php">
            <button type="submit">
                <img src="../img/bee.jpg" alt="buttonpng" width="150" height="150" />
            </button>
        </a>
    </nav>

    <body>
        <h1>Logs:</h1>
        <?php 
            $dirname = "../db/photos/";
            $images = glob($dirname."*.jpg");

            foreach($images as $image) {
                echo '<p>'.$image.'</p>';
                echo '<img src="'.$image.'" /><br />';
            }
        ?>
    </body>
</html>
