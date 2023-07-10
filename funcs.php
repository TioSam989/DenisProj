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
function addToCart($userId, $productId, $quantity)
{

    global $conn;


    $existingCartItemQuery = "SELECT * FROM carrinho WHERE user_id = $userId AND product_id = $productId";
    $existingCartItemResult = mysqli_query($conn, $existingCartItemQuery);

    if (mysqli_num_rows($existingCartItemResult) > 0) {
        $existingCartItem = mysqli_fetch_assoc($existingCartItemResult);
        $newQuantity = $existingCartItem['quantity'] + $quantity;

        $updateQuantityQuery = "UPDATE carrinho SET quantity = $newQuantity WHERE id = " . $existingCartItem['id'];
        mysqli_query($conn, $updateQuantityQuery);
    } else {
        $insertCartItemQuery = "INSERT INTO carrinho (user_id, product_id, quantidade) VALUES ($userId, $productId, $quantity)";
        mysqli_query($conn, $insertCartItemQuery);
    }

    mysqli_close($conn);
}

// Function to remove a product from the cart
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