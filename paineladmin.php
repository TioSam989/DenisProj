<?php 
session_start();

if(!isset($_SESSION['admin'])){
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
  <header class="header">

    <a href="paineladmin.php" class="logo">Calin Salajan | Administração</a>

    <nav class="navbar">
        <a href="pintordashboard.php">Pintor</a>
        <a href="canalizadordashboard.php">Canalizador</a>
        <a href="carpinteirodashboard.php">Carpinteiro</a>
        <a href="eletricistadashboard.php">Eletricista</a>
        <a href="contactedashboard.php">Contacte</a>
        <a href="avaliacoesdashboard.php">Avaliações</a>
        <a href="ask.php">Logout</a>
        
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>


<div class="separador"></div>
<br>

<section>
    
</section>






</body>