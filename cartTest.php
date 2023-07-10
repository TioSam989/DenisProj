<?php
include_once('./conexao.php');
session_start();
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

        <div class="product">
            <div class="product-image">
                <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
            </div>
            <div class="product-details">
                <p class="product-description">The best dog bones of all time. Holy crap. Your dog will be begging for
                    these things! I got curious once and ate one myself. I'm a fan.</p>
            </div>
            <div class="product-price">12.99</div>
            <div class="product-quantity">
                <input type="number" value="2" min="1">
            </div>
            <div class="product-removal">
                <button class="remove-product">
                    Remove
                </button>
            </div>
            <div class="product-line-price">25.98</div>
        </div>

        <div class="totals">
            
            
          
            <div class="totals-item totals-item-total">
                <label>Grand Total</label>
                <div class="totals-value" id="cart-total">90.57</div>
            </div>
        </div>

        <button class="checkout">Checkout</button>

    </div>

    <!-- <div class="shopping-cart"> no</div> -->

</body>

</html>