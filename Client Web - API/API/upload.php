<?php
	header('Content-Type: text/html; charset=utf-8');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_FILES['imagem']){
            //print_r($_FILES['imagem']);
            /*print_r($_FILES['imagem']['name']);
            print_r($_FILES['imagem']['size']);
            print_r($_FILES['imagem']['type']);*/
        
            $target_dir = "../db/photos/";
            
            $dt = new DateTime("now", new DateTimeZone('Europe/Lisbon'));

            $target_file = $target_dir . basename($_FILES["imagem"]["name"]);//'webcam.jpg';//basename($_FILES["imagem"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
              $check = getimagesize($_FILES["imagem"]["tmp_name"]);
              if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
              } else {
                echo "File is not an image.";
                $uploadOk = 0;
              }
            }
            
            // Check file size
            if ($_FILES["imagem"]["size"] > 500000) {
              echo "Sorry, your file is too large.";
              $uploadOk = 0;
            }
            
            // Allow certain file formats
            if($imageFileType != "jpg") {
              echo "Sorry, only JPG files are allowed.";
              $uploadOk = 0;
            }
            
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
              echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
              if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["imagem"]["name"])). " has been uploaded.";
              } else {
                echo "Sorry, there was an error uploading your file.";
              }
            }
        
        }
        else{
            http_response_code(404);
        }
	}   

    else{
        http_response_code(404);
    }

?>