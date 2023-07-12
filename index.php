<?php
session_start();
include_once('conexao.php');
include_once('funcs.php');
if (isset($_SESSION['admin'])) {
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
            <?php

            if (isset($_SESSION['user'])) {
                ?>

                <a href="logout.php">Logout</a>

                <?php
            } else {
                ?>

                <a href="logout.php">Login/Registo</a>

                <?php
            }

            ?>

            <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <br>
    <section class="home" id="home">

        <div class="image">
            <img src="image/LOGO SITE.png" alt="">
        </div>
        <div class="content">
        </div>
    </section>

    <div class="separador"></div>
    <br>
    <section class="services" id="services">

        <h1 class="heading"><span>Serviços</span> </h1>
        <div class="box-container">

            <div class="box">
                <img src="image/MANUTENCAO.png" alt="">
                <br>
                <br>
                <h3>Manutenção</h3>
                <p>Mantendo a qualidade e funcionalidade</p>
                <a href="manutencaopage.html" class="btn">Ver</a>
            </div>

            <div class="box">
                <img src="image/REMODELACOES.png" alt="">
                <br>
                <br>
                <h3>Remodelações</h3>
                <p>Transformação de acordo com a sua visão</p>
                <a href="remodelacoespage.html" class="btn">Ver</a>
            </div>

            <div class="box">
                <img src="image/LIMPEZA.webp" alt="">
                <br>
                <br>
                <h3>Limpeza de Obras</h3>
                <p>Transformando o local em um espaço impecável</p>
                <a href="limpezapage.html" class="btn">Ver</a>
            </div>

        </div>

        <br>
    </section>


    <section class="about" id="about">

        <h1 class="heading"> <span>Projetos</span></h1>
        <div class="box-container">

            <div class="box">
                <img src="image/naturaloja.jpg" alt="">
                <br>
                <br>
                <p>Natura Centro Colombo</p>
            </div>

            <div class="box">
                <img src="image/gantloja.jpg" alt="">
                <br>
                <br>
                <p>Gant Centro Colombo</p>
            </div>

            <div class="box">
                <img src="image/lacosteloja.webp" alt="">
                <br>
                <br>
                <p>Lacoste Humberto Delgado</p>
            </div>

            <div class="box">
                <img src="image/bimbaylolaloja.jpg" alt="">
                <br>
                <br>
                <p>Bimba Y Lola Pamplona</p>
            </div>

        </div>
        <br>
        <a href="projetospage.html" class="btn">Ver mais</a>
    </section>

    <br>

    <section class="projetos" id="proj">

        <h1 class="heading"><span>Clientes</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/natura.png" alt="">
            </div>

            <div class="box">
                <img src="image/gant.png" alt="">
            </div>

            <div class="box">
                <img src="image/anazaz.png" alt="">
            </div>

            <div class="box">
                <img src="image/lacoste.png" alt="">
            </div>

        </div>
        <br>
        <div class="box-container">

            <div class="box">
                <img src="image/Swarovski.png" class="swarovski" alt="">
            </div>

            <div class="box">
                <img src="image/decathlon.png" alt="">
            </div>

            <div class="box">
                <img src="image/binba.png" alt="">
            </div>

            <div class="box">
                <img src="image/brownie.png" alt="">
            </div>

        </div>
        <br>
    </section>

    <section class="plan" id="plan">

        <h1 class="heading"><span>Oportunidades</span> </h1>

        <div class="box-container">

            <div class="box">
                <h3 class="title">Pintor</h3>
                <br>
                <img src="image/PINTOR.webp" alt="">
                <br>
                <a href="pintorcand.php" class="btn">Candidatar</a>
            </div>

            <div class="box">
                <h3 class="title">Canalizador</h3>
                <br>
                <img src="image/canalizador.jpeg" alt="">
                <br>
                <a href="gerentedeobra.php" class="btn">Candidatar</a>
            </div>

            <div class="box">
                <h3 class="title">Carpinteiro</h3>
                <br>
                <img src="image/CARPINTEIRO.png" alt="">
                <br>
                <a href="carpinteiro.php" class="btn">Candidatar</a>
            </div>

            <div class="box">
                <h3 class="title">Eletricista</h3>
                <br>
                <img src="image/ELETRICISTA.webp" alt="">
                <br>
                <a href="eletricista.php" class="btn">Candidatar</a>
            </div>

        </div>
        <br>
    </section>

    <section class="review" id="review">

        <h1 class="heading"><span>Avaliações</span> </h1>

        <div class="box-container">

        </div>

        <br>
        <div class="btnavaliar">
            <a href="avaliacoespage.php" class="btn">Criar avaliação</a>
        </div>
        <br>
    </section>

    <section class="plan">

        <h1 class="heading"><span>Produtos</span> </h1>

        <div class="box-container">
            <?php

            if(isset($_POST['submitBtnProduct'])){
                $crrUserId = $_SESSION['user'];
                $crrProduct = $_POST['productId'];
                addToCart($crrUserId, $crrProduct, '1');
                
            }else{


            $sql = "SELECT * FROM produtos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $productId = $row['id'];
                    $productName = $row['nome'];
                    $productImage = $row['img'];
                    $productPrice = $row['preco'];

                    consolar($productId);
                    ?>

                    <div class="box">
                        <h3 class="title">
                            <?php echo $productName; ?>
                        </h3>
                        <br>
                        <img src="image/<?php echo $productImage; ?>" alt="">
                        <br>
                        <br>
                        <p>
                            <?php echo $productPrice; ?>€
                        </p>
                        <form method="POST">
                            <input type="hidden" name="productId" value="<?php echo $productId ?>">
                            <button class="btn" name="submitBtnProduct" type="submit">Adicionar Ao Carrinho</button>
                        </form>
                    </div>

                    <?php
                }
            } else {
                echo "No products found.";
            }

            // Close the database connection
            $conn->close();

        }

            ?>

    </section>


    <div class="separador"></div>

    <section class="contact" id="contact">

        <h1 class="heading"> <span>Localização</span></h1>

        <div class="row">
            <div class="image">
                <a
                    href="https://www.google.com/maps/place/R.+Dami%C3%A3o+de+G%C3%B3is+27,+2650-320+Amadora/@38.7653303,-9.2098786,17z/data=!3m1!4b1!4m6!3m5!1s0xd1ecd3ea638e0ff:0x19675f79c36ce1ea!8m2!3d38.7653261!4d-9.2073037!16s%2Fg%2F11c22qlphm?entry=ttu">
                    <div class="QMbmRe"
                        style="background-image:url('https://maps.googleapis.com/maps/api/staticmap?scale=1&amp;size=1600x900&amp;style=feature:poi.business|visibility:off&amp;style=feature:water|visibility:simplified&amp;style=feature:road|element:labels.icon|visibility:off&amp;style=feature:road.highway|element:labels|saturation:-90|lightness:25&amp;format=jpg&amp;language=pt-PT&amp;region=PT&amp;markers=color:0xddaa44|38.7653328,-9.2072891&amp;zoom=16&amp;client=google-presto&amp;signature=i3Q8ZE71J_LJDLa5kI4oMxylTzY')"
                        title="Mapa a mostrar a localização da empresa."></div>
                </a>
            </div>

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
        <div class="credit"> created by <span>Denis Salajan</span> | all rights reserved</div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>