<?php 
session_start();

if(isset($_SESSION['admin'])){
    header('Location: ./paineladmin.php');
}

include_once('./conexao.php'); //incluindo conexao com db
include_once('./funcs.php'); //importando minhas funcoes

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
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

        if (isset($_POST['submitBtnLogar'])) {

            $email = $_POST['emailInp'];
            $pass = md5($_POST['password2Inp']);

            $emailQuery = mysqli_query($conn, "SELECT * FROM usuarios WHERE Email='$email' ") or die('Nao foi possivel executar seu pedido');
            $accountQuery = mysqli_query($conn, "SELECT * FROM usuarios WHERE Email='$email' AND password='$pass' ") or die('Nao foi possivel executar seu pedido');

            $wrongPass = mysqli_fetch_assoc($emailQuery);
            $accounts = mysqli_fetch_assoc($accountQuery);

            if (($email == 'admin@admin.pt') && ($pass == '0192023a7bbd73250516f069df18b500')) {
                $_SESSION['admin'] = 'Admin';
                sleep(2);
                header('Location: ./paineladmin.php');
            } else {


                if (is_array($accounts) && !empty($accounts)) {
                    $validUser = $accounts['id'];
                    $_SESSION['user'] = $validUser;
                    alertar('Logado com sucesso');
                    sleep(2);
                    header('Location: ./index.php');
                } else if (is_array($wrongPass) && !empty($wrongPass)) {
                    alertar('senha incorreta');
                    sleep(2);
                    Header('Refresh: 0');
                } else {
                    alertar('Conta inexistente');
                    sleep(2);
                    Header('Refresh: 0');
                }
            }


        } else {
            ?>

            <br>
            <section class="contact1" id="contact">

                <div class="row">
                    <form method="POST">

                        <h1 class="heading"> <span>Login</span></h1>

                        <input type="email" name="emailInp" required placeholder="email" class="box">
                        <input type="password" name="password2Inp" required placeholder="Rep. password" class="box">
                        <input type="submit" value="Logar" name="submitBtnLogar" class="btn">
                    </form>

                </div>

                <br>
            </section>

            <section class="about3" id="about">

                <div class="row">
                    <div class="content">
                        <p>Ainda não possui uma conta ? clique <a style="color: blue;" href="./registar.php">aqui</a> para criar
                            uma </p>
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