<?php 
session_start();

if((!isset($_SESSION['admin'])) || (!isset($_SESSION['user']))){
    header('Location: ./index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calin Salajan LDA</title>
    <link rel="shortcut icon" href="image/CLGOOGLE.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<br>
<section class="about3" id="about">
    
    <div class="row">
        <div class="content">
            <p>Tem a certeza que quer sair da pagina de administradores? | Administradores</p>
    </div>
</section>
<section class="contact1" id="contact">

<div class="row">
        <form method="POST" action="./logout.php">
            
    <h1 class="heading"> <span>Sair</span></h1>
            <input type="submit" name="Sim" value="Sim" class="btn">
            <input type="submit" name="Nao" value="Nao" class="btn">
            
    </div>
    
<br>
</section>

</body>
</html>