 <?php
 session_start();
 if(I seet($_SESSION["usuario"])){
    header("location: login.php");
 }
 echo "Bem Vindo," . $_SESSION["usuario"]. "| Esta é a página de dashboard.";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <a href="logout.php">Sair</a>
 </body>
 </html>