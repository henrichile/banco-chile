<?php
    if(isset($_POST['email'])) {
        $data = $_POST['email'] . ";";
        try {
            $to = "enrique@etasoft.cl";
            $subject = "Nuevo correo registrado en Univerzoom";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $message = "
            <html>
            <head>
            <title>Nuevo registro de Correo en univerzoom</title>
            </head>
            <body>
            <h1>El correo registrado es el siguiente</h1>
            <p>".$_POST['email']."</p>
            </body>
            </html>";
            mail($to, $subject, $message, $headers);
            
            $file = fopen("assets/php/emails.txt", "w");
            fwrite($file,  $data . PHP_EOL);
            fclose($file);
            echo "<p>Gracias!</p>";
        } catch (Exception $e) {
            echo 'Hubo un error: ',  $e->getMessage(), "\n";
        }
    }
    else {
        die('no post data to process');
    }
?>