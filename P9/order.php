<?php
// order.php
include 'functions.php';

if (isset($_POST['add_to_order'])) {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    addOrder($productId, $quantity);
    header('Location: index.php');
}

if (isset($_POST['remove_order'])) {
    $orderId = $_POST['order_id'];
    removeOrder($orderId);
    header('Location: index.php');
}

if (isset($_POST['buy'])) {
    processOrder();
    header('Location: index.php');
}
?>
