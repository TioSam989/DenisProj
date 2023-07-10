<?php
include_once('./conexao.php'); //incluindo conexao com db
include_once('./funcs.php'); //importando minhas funcoes
 
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
    <title>REGISTAR</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.5/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <header class="header">

        <a href="index.php" class="logo">Calin Salajan</a>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>
<div class="separador" style="background-color: white">
    
</div>
    <?php
    if ($conn) {

        if (isset($_POST['submitBtnRegistar'])) {

            $name = $_POST['nomeInp'];
            $email = $_POST['emailInp'];
            $telemovel = $_POST['telInp'];
            $pass1 = md5($_POST['password1Inp']);
            $pass2 = md5($_POST['password2Inp']);

            if ($pass1 != $pass2) {
                alertar('Senhas nao combinam');
                sleep(2); //esperar dois segundos para recarregar a pagina
                header('Refresh:0');

            } else {

                $pass = $pass1;

                $emailQuery = mysqli_query($conn, "SELECT * FROM usuarios WHERE Email='$email' ") or die("Nao foi possivel executar o seu pedido");
                $row = mysqli_fetch_assoc($emailQuery);

                if (is_array($row) && !empty($row)) {
                    alertar("Esse email ja esta em utilização");
                    sleep(2); //esperar dois segundos para recarregar a pagina
                    header("Refresh:0");
                } else {
                    mysqli_query($conn, "INSERT INTO usuarios(Nome, Email, Telemovel, Password) VALUES('$name','$email','$telemovel','$pass')") or die("nao foi possivel concluir a operação");
                    alertar("conta criada com exito");
                    sleep(2); //esperar dois segundos para recarregar a pagina
                    header("Location: ./login.php");
                }
            }

        } else {
            ?>


            <br>
            <section class="about3" style="background-color: white" id="about">

                <div class="row">
                    <!-- <div class="content">
                        <p>Página para aceder às candidaturas | Administradores</p>
                    </div> -->
            </section>
            <section class="contact1" id="contact">

                <div class="row">
                    <form method="POST">

                        <h1 class="heading"> <span>AdminPainel - Registar</span></h1>

                        <input type="text" name="nomeInp" required placeholder="Nome completo" class="box">
                        <input type="email" name="emailInp" required placeholder="email" class="box">
                        <input type="number" name="telInp" required placeholder="999999999" class="box">
                        <input type="password" name="password1Inp" required placeholder="password" class="box">
                        <input type="password" name="password2Inp" required placeholder="Rep. password" class="box">
                        <input type="submit" value="Registar" name="submitBtnRegistar" class="btn">

                </div>

                <br>
            </section>

            <section class="about3" id="about">

                <div class="row">
                    <div class="content">
                        <p>ja possui uma conta ? clique <a style="color: blue;" href="./login.php">aqui</a> para Logar</p>
                    </div>
            </section>


            <?php
        }
    } else {
        alertar('Nao há conexao com a base de dados');
    }
    ?>

</body>

</html>