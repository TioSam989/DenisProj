<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calinsalajanbd";

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

function alertar($msg)
{
    echo '<script>alert("' . $msg . '")</script>';
}

function consolar($msg)
{
    echo '<script>console.log("' . $msg . '")</script>';
}

// Function to add a product to the cart
// Your existing code...

// Function to add a product to the cart
function addToCart($userId, $productId, $quantity)
{
    global $conn;

    $carrinhoVazioQuery = mysqli_query($conn, "SELECT * FROM carrinho WHERE user_id=$userId ") or die("Nao foi possivel executar o seu pedido");
    $itemDoCarrinhoQuery = mysqli_query($conn, "SELECT * FROM carrinho WHERE user_id=$userId AND product_id=$productId ") or die("Nao foi possivel executar o seu pedido");
    $resultCarrinho = mysqli_fetch_assoc($carrinhoVazioQuery);
    $resultItemDoCarrinho = mysqli_fetch_assoc($itemDoCarrinhoQuery);

    if (is_array($resultCarrinho) && !empty($resultCarrinho)) { //ja tem algo no carrinho


        if (is_array($resultItemDoCarrinho) && !empty($resultItemDoCarrinho)) { //artigo tentado comprar é o mesmo q tem no carrinho, so adicionar +1

            $atualIdDoCarrinho = $resultItemDoCarrinho['id'];
            $result = mysqli_query($conn, "UPDATE carrinho SET quantidade  = quantidade + $quantity WHERE id = $atualIdDoCarrinho;");
            echo '<script>window.location.href = "./cartTest.php";</script>';
            exit();

        } else { //senao adiciona no carrinho ja com quantidade desejada

            $result = mysqli_query($conn, "INSERT INTO carrinho (user_id, product_id, quantidade) VALUES ('$userId', '$productId', '$quantity');");
            echo '<script>window.location.href = "./cartTest.php";</script>';
            exit();

        }

    } else { //senao tiver nada no carrinho, entao adiciona no carrinho ja com quantidade desejada

        $result = mysqli_query($conn, "INSERT INTO carrinho (user_id, product_id, quantidade) VALUES ('$userId', '$productId', '$quantity');");
        echo '<script>window.location.href = "./cartTest.php";</script>';
        exit();


    }



}

function removeFromCart($userId, $productId)
{

    global $conn;

    $deleteCartItemQuery = "DELETE FROM carrinho WHERE user_id = $userId AND product_id = $productId";
    mysqli_query($conn, $deleteCartItemQuery);

    mysqli_close($conn);
}

// Function to clear the cart
function clearCart($userId)
{

    global $conn;

    $deleteCartItemsQuery = "DELETE FROM carrinho WHERE user_id = $userId";
    mysqli_query($conn, $deleteCartItemsQuery);
    mysqli_close($conn);


}

// Function to get the total quantity of products in the cart
function getCartTotalQuantity($userId)
{
    global $conn;

    $totalQuantityQuery = "SELECT SUM(quantidade) AS total_quantidade FROM carrinho WHERE user_id = $userId";
    $totalQuantityResult = mysqli_query($conn, $totalQuantityQuery);
    $totalQuantityRow = mysqli_fetch_assoc($totalQuantityResult);

    $totalQuantity = $totalQuantityRow['total_quantidade'];

    mysqli_close($conn);

    return $totalQuantity;
}

// Function to get the cart items with product details
function getCartItems($userId)
{

    global $conn;

    $cartItemsQuery = "SELECT cart.product_id, products.nome, products.image, cart.quantidade FROM carrinho 
                       JOIN produtos ON cart.product_id = products.id
                       WHERE cart.user_id = $userId";
    $cartItemsResult = mysqli_query($conn, $cartItemsQuery);

    $cartItems = [];

    while ($row = mysqli_fetch_assoc($cartItemsResult)) {
        $cartItems[] = $row;
    }

    mysqli_close($conn);

    return $cartItems;
}

function getProductById($conn, $productId)
{



    // Check the connection
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Prepare the query
    $query = "SELECT * FROM produtos WHERE id = $productId";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if a row was returned
    if (mysqli_num_rows($result) > 0) {
        // Fetch the product data
        $product = mysqli_fetch_assoc($result);

        // Close the database connection
        mysqli_close($conn);

        return $product;
    }

    // Close the database connection
    mysqli_close($conn);

    return null;
}

?>