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
<section class="plan2" id="plan">

  <section class="about" id="about">
      <div class="row">
          <div class="content">
              <h3>Candidaturas Canalizador</h3>

          </div>
      </div>

  </section>
  <div class="box-container">

    <div class="box">
        <br>
         <p>Candidaturas</p>
    </div>

    <div class="box">
        <br>
        <p>Aceites</p>
    </div>

    <div class="box">
        <br>
        <p>Rejeitadas</p>
    </div>

  </div>
  <br>
  </section>
<br>
<section class="review" id="review">


    <div class="box-container">
        
    </div>

    <br>
</div>
    <br>
</section>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="js/canalizador.js"></script>



</body>