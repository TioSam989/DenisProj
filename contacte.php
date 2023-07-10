
<?php 
session_start();

if(isset($_SESSION['admin'])){
    header('Location: ./paineladmin.php');
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

    <a href="index.php" class="logo">Calin Salajan</a>

    <nav class="navbar">
        <a href="index.php">Inicio</a>
        <a href="aboutus.html">Sobre</a>
        <a href="projetospage.html">Projetos</a>
        <a href="contacte.php">Contacte</a>
        <a href="carrinhodecompras.php">Carrinho</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<br>
<section class="about3" id="about">
    <div class="separador"></div>
    
<div class="separador"></div>
    <div class="row">
        <div class="content">
            

    
            
            <p>Não te esqueças de citar as seguintes informações: Nome, Idade, Localidade, Cartão de cidadão, Curriculo e outras informações que aches relevante para a tua candidatura.</p>
            
            
    </div>
</section>
<section class="contact1" id="contact">

<div class="row">
        <form method="POST" action="./contactos.php">
            
    <h1 class="heading"> <span>Contacte</span></h1>
            <input type="text" name="nome" required placeholder="nome completo" class="box">
            <input type="email" name="email" required placeholder="email" class="box">
            <input type="number" name="telemovel" placeholder="telemovel" class="box">
            <textarea name="mensagem" required placeholder="mensagem" class="box" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Enviar Candidatura" class="btn">
    </div>
    
<br>
</section>
<div class="separador2"></div>

<section class="footer">

    <div class="share">
        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
        <a href="https://pt.linkedin.com/" class="fab fa-linkedin"></a>
        <a href="https://twitter.com/" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
        <a href="https://www.pinterest.pt/" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> created by <span>Calin Salajan</span> | all rights reserved </div>

</section>

<script src="js/script.js"></script>

</body>
</html>