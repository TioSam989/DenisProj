<?php
session_start();
include_once("funcs.php");
include_once("conexao.php");

if (!isset($_SESSION['admin'])) {
    echo '<script>window.location.href = "./index.php";</script>';
} else {
    if (isset($_GET['uid'])) {
        $crrUserId = $_GET['uid'];

        $nomeUser;
        $emailUser;
        $telUser;

        if (isset($_POST['submitUpdateUserBtn'])) {
            $newNome=  $_POST['NomeInp'];
            $newEmail = $_POST['EmailInp'];
            $newTel = $_POST['TelInp'];

            if(!$newNome || $newNome==""){
                $newNome = $nomeUser;
            }
            if(!$newEmail || $newEmail==""){
                $newEmail = $emailUser;
            }
            if(!$newTel || $newTel==""){
                $newTel = $telUser;
            }

            $result=mysqli_query($conn, "UPDATE usuarios SET Nome='$newNome', Email='$newEmail', Telemovel=$newTel WHERE id=$crrUserId");
            echo '<script>window.location.href = "./paineladmin.php";</script>';

            
        } else {
            $crrUserQuery = "SELECT * FROM usuarios WHERE id = $crrUserId";
            $result = mysqli_query($conn, $crrUserQuery);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $nomeUser = $row['Nome'];
                    $emailUser = $row['Email'];
                    $telUser = $row['Telemovel'];

                } else {
                    echo "No rows found.";
                }
                mysqli_free_result($result);
            } else {
                echo "Error executing query: " . mysqli_error($conn);
            }


            ?>




            <form method="POST">
                <label>
                    Nome:
                    <input type="text" name="NomeInp" value="<?php echo $nomeUser; ?>" required autofocus>
                </label>
                <label>
                    Email:
                    <input type="email" name="EmailInp" value="<?php echo $emailUser; ?>" required>
                </label>
                <label>
                    Telemovel:
                    <input type="tel" name="TelInp" value="<?php echo $telUser; ?>" required>
                </label>

                <button name="submitUpdateUserBtn" type="submit">Update</button>
            </form>

            <?php
        }

    } else {
        echo '<script>window.location.href = "./paineladmin.php";</script>';
    }
}
?>