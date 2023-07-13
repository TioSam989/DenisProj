<!DOCTYPE html>
<?php
include_once("./conexao.php");
include_once('funcs.php');
?>


<?php
if (isset($_SESSION['admin'])) {
    ?>

    <?php
    if (!(isset($_SESSION['admin']))) {
        header("Location:./index.php");
    }
    ?>

    <?php
}

?>

<div class="listPlace">

    <?php
    if ($conn) { //verifica se ha ligacao com a DB
        if (!isset($_SESSION['admin'])) { //ve se é o ADM que esta logado, se estiver vai fazer a parte a baixo
            header('Location: ./index.php');
        } else { //se nao for o ADM logado ele vai mostrar as coisas a baixo
            ?>



            <!-- Header with full-height image -->
            <?php
            if ($conn) { // verificar se ha conexao com a DB
    
                if (isset($_POST['submitUpdateUser'])) {
                    $crrUid = $_POST['uid'];
                    echo '<script>window.location.href = "./updateUserDashboard.php?uid='.$crrUid.'";</script>';
                    exit();
                }



                echo "<div>";

                echo "<div >";
                echo "<div >";
                echo "<h1>Todos Usuarios</h1>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

                $resultado = mysqli_query($conn, "SELECT * FROM usuarios "); //uma query pra selecionar todos os items existentes na loja de chocolate
                $linha = mysqli_fetch_assoc($resultado); //arrumar os dados recebidos na query anteior em arrays
    
                if (is_array($linha) && !empty($linha)) { //verificar se realmente ha dados
                    while ($linha) { // enquanto tiver daoos pra mostrar ele vai mostrar na tela
                        $id = $linha['id'];
                        $nomeUs = $linha['Nome'];

                        echo "<div>";
                        echo " <div  id='$nomeUs'>";
                        echo "<div>";
                        echo "  <div >";
                        echo "    <h2><strong>" . $linha['id'] . " - </strong>" . $linha['Nome'] . "</h2>";

                        echo "    <p ><strong>Email: </strong>" . $linha['Email'];
                        echo " <p><strong>Telemovel: </strong>" . $linha['Telemovel'] . "</p>";
                        echo "<form method='POST'>";
                        echo "<input type='hidden' name='uid' value='" . $id . "' />";
                        echo "<button name='submitUpdateUser' type='submit'>Update</button>";
                        echo "<form/>";
                        echo "<div >";

                        echo "</div>";

                        echo "</div>";
                        echo " </div>";
                        echo "  </div>";
                        echo " </div>";


                        $linha = mysqli_fetch_assoc($resultado); //pra parar de mostrar os dados, senao vai mostrar os mesmos dados repetidamente pra sempre
    
                    }
                } else { // se nao tiver nenhum produto vai escrever que nao ha produto
                    echo "<center> ";
                    echo "<p>Nenhum dado</p> ";
                    echo "</center> ";
                }

            } else { // caso nao consiga ligar a DB
                alertar("nao foi possivel concetar a base de dados");

            }
            ?>

        </div>

        </div>

        </div>

        <?php
        }
    }
    ?>