<?php 

include_once("./conexao.php");
function alertar($msg){
    echo '<script>alert("'.$msg.'")</script>';

}

<?php

// Function to establish a database connection
function connectToDatabase()
{
    $host = 'localhost';
    $username = 'your_username';
    $password = 'your_password';
    $database = 'your_database';

    if (!$conn) {
        die('Database connection failed: ' . mysqli_connect_error());
    }

    return $conn;
}

// Function to add a product to the cart
function addToCart($userId, $productId, $quantity)
{

    $existingCartItemQuery = "SELECT * FROM cart WHERE user_id = $userId AND product_id = $productId";
    $existingCartItemResult = mysqli_query($conn, $existingCartItemQuery);

    if (mysqli_num_rows($existingCartItemResult) > 0) {
        $existingCartItem = mysqli_fetch_assoc($existingCartItemResult);
        $newQuantity = $existingCartItem['quantity'] + $quantity;

        $updateQuantityQuery = "UPDATE cart SET quantity = $newQuantity WHERE id = " . $existingCartItem['id'];
        mysqli_query($conn, $updateQuantityQuery);
    } else {
        $insertCartItemQuery = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($userId, $productId, $quantity)";
        mysqli_query($conn, $insertCartItemQuery);
    }

    mysqli_close($conn);
}

// Function to remove a product from the cart
function removeFromCart($userId, $productId)
{
    $deleteCartItemQuery = "DELETE FROM cart WHERE user_id = $userId AND product_id = $productId";
    mysqli_query($conn, $deleteCartItemQuery);

    mysqli_close($conn);
}

// Function to clear the cart
function clearCart($userId)
{
    $deleteCartItemsQuery = "DELETE FROM cart WHERE user_id = $userId";
    mysqli_query($conn, $deleteCartItemsQuery);

    mysqli_close($conn);
}

// Function to get the total quantity of products in the cart
function getCartTotalQuantity($userId)
{
    $totalQuantityQuery = "SELECT SUM(quantity) AS total_quantity FROM cart WHERE user_id = $userId";
    $totalQuantityResult = mysqli_query($conn, $totalQuantityQuery);
    $totalQuantityRow = mysqli_fetch_assoc($totalQuantityResult);

    $totalQuantity = $totalQuantityRow['total_quantity'];

    mysqli_close($conn);

    return $totalQuantity;
}

// Function to get the cart items with product details
function getCartItems($userId)
{
    $cartItemsQuery = "SELECT cart.product_id, products.name, products.image, cart.quantity FROM cart 
                       JOIN products ON cart.product_id = products.id
                       WHERE cart.user_id = $userId";
    $cartItemsResult = mysqli_query($conn, $cartItemsQuery);

    $cartItems = [];

    while ($row = mysqli_fetch_assoc($cartItemsResult)) {
        $cartItems[] = $row;
    }

    mysqli_close($conn);

    return $cartItems;
}

function getProductById($productId)
{
    // Connect to your MySQL database
    $conn = mysqli_connect('localhost', 'username', 'password', 'database_name');

    // Check the connection
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Prepare the query
    $query = "SELECT * FROM products WHERE id = $productId";

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

