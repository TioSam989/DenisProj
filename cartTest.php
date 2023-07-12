<?php
include_once('./conexao.php');
include("./funcs.php");
session_start();

if (isset($_SESSION['admin'])) {
    header('location: ./paineladmin.php');
} elseif (!isset($_SESSION['user'])) {
    header('location: ./index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="shortcut icon" href="image/CLGOOGLE.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <a href="index.php" class="logo">Calin Salajan</a>]
        <div id="menu-btn" class="fas fa-bars"></div>
        <script
            src="https://www.paypal.com/sdk/js?client-id=AdwOppQQiMLgWQtFlbETJttiVo7yKWj-2hJnz1YBpO1rfFohoU275is9ZUHWzDwBtBPGKlOIPSdxFS4q&currency=EUR"
            data-namespace="paypal_sdk"></script>
    </header>

    <div class="separador" style="background-color: white">
    </div>

    <?php
    $userId = $_SESSION["user"];
    $cartItems = [];
    $totalPrice = 0;

    $sql = "SELECT * FROM carrinho where user_id = $userId";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Fetch each row from the cart table
        while ($row = mysqli_fetch_assoc($result)) {
            $product_id = $row['product_id'];

            // Fetch additional product information from the products table based on product_id
            $productSql = "SELECT * FROM produtos WHERE id = '$product_id'";
            $productResult = mysqli_query($conn, $productSql);
            $productRow = mysqli_fetch_assoc($productResult);

            // Combine the cart item data with the product information
            $cartItem = [
                'product_id' => $row['product_id'],
                'user_id' => $row['user_id'],
                'quantity' => $row['quantidade'],
                'name' => $productRow['nome'],
                'price' => $productRow['preco'],
                'image' => $productRow['img']
            ];
            $cartItems[] = $cartItem;

            mysqli_free_result($productResult);
        }

        // Free the cart result set
        mysqli_free_result($result);
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }

    mysqli_close($conn);

    ?>
    <h1>Shopping Cart</h1>

    <div class="shopping-cart">

        <div class="column-labels">
            <label class="product-image">Image</label>
            <label class="product-details">Product</label>
            <label class="product-price">Price</label>
            <label class="product-quantity">Quantity</label>
            <label class="product-removal">Remove</label>
            <label class="product-line-price">Total</label>
        </div>

        <div class="cart-items">
            <?php foreach ($cartItems as $item) { ?>
                <div class="product">
                    <div class="product-image">
                        <img src="image/<?php echo $item['image']; ?>">
                    </div>
                    <div class="product-details">
                        <p class="product-title">
                            <?php echo $item['name']; ?>
                        </p>
                    </div>
                    <div class="product-price">
                        <?php echo $item['price']; ?>
                    </div>
                    <div class="product-quantity">
                        <input type="number" value="<?php echo $item['quantity']; ?>" min="1">
                    </div>
                    <div class="product-removal">
                        <button class="remove-product">
                            Remove
                        </button>
                    </div>
                    <div class="product-line-price">
                        <?php echo $item['price'] * $item['quantity']; ?>
                        <?php $totalPrice += $item['price'] * $item['quantity'] ?>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="totals">



            <div class="totals-item totals-item-total">
                <label>Total Carrinho</label>
                <div class="totals-value" id="cart-total">
                    <?php echo $totalPrice; ?>
                </div>
            </div>

        </div>


        <div id="paypal-button-container"></div>

        <script>
            // Render the PayPal button into #paypal-button-container
            paypal_sdk.Buttons({
                // Set up the transaction
                createOrder: function (data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: '<?php echo $totalPrice; ?>'
                            }
                        }]
                    });
                },
                // Finalize the transaction
                onApprove: function (data, actions) {
                    return actions.order.capture().then(function (orderData) {
                        // Successful capture! For demo purposes:
                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                        var transaction = orderData.purchase_units[0].payments.captures[0];
                        alert('Transaction ' + transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                        // Make a GET request to your page.php with the userid parameter
                        var userid = '<?php echo $userId ?>'; // Replace with the actual userid value
                        var url = 'checkout.php?userid=' + encodeURIComponent(userid);
                        var xhr = new XMLHttpRequest();
                        xhr.open('GET', url, true);
                        xhr.onreadystatechange = function () {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                // Handle the response from page.php
                                console.log(xhr.responseText);
                            }
                        };
                        xhr.send();
                        location.reload(); //coloquei mas depois q ter ajax tem q tirar
                    });
                }
            }).render('#paypal-button-container');
        </script>



    </div>

    meh


</body>

</html>