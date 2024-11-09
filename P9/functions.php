<?php
// functions.php
include 'database.php';

// Fungsi untuk mengambil produk
function getProducts($conn) {
    $sql = "SELECT * FROM products";
    $stmt = sqlsrv_query($conn, $sql);
    $products = [];
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $products[] = $row;
    }
    return $products;
}

// Fungsi untuk menambah pesanan
function addOrder($productId, $quantity) {
    // Implementasi untuk menambah pesanan ke dalam sesi atau database
    // Assuming $conn is your database connection
    $sql = "INSERT INTO orders (product_id, quantity) VALUES (?, ?)";
    $params = [$productId, $quantity];
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    // Optionally, add order to session
    if (!isset($_SESSION['orders'])) {
        $_SESSION['orders'] = [];
    }
    $_SESSION['orders'][] = ['product_id' => $productId, 'quantity' => $quantity];
}

// Fungsi untuk menghapus pesanan
function removeOrder($orderId) {
    // Implementasi untuk menghapus pesanan dari sesi atau database
    // Hapus dari sesi
    if (isset($_SESSION['orders'])) {
        $_SESSION['orders'] = array_filter($_SESSION['orders'], function($order) use ($orderId) {
            return $order['product_id'] != $orderId;
        });
    }

    // Hapus dari database
    $sql = "DELETE FROM orders WHERE id = ?";
    $params = [$orderId];
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }
}

// Fungsi untuk memproses pembelian
function processOrder() {
    // Implementasi untuk menyimpan pesanan ke database
    // Hapus data pesanan di database
    $sql = "DELETE FROM orders";
    $stmt = sqlsrv_query($conn, $sql);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    // Simpan data pesanan ke database
    if (isset($_SESSION['orders'])) {
        foreach ($_SESSION['orders'] as $order) {
            $sql = "INSERT INTO orders (product_id, quantity) VALUES (?, ?)";
            $params = [$order['product_id'], $order['quantity']];
            $stmt = sqlsrv_query($conn, $sql, $params);

            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            }
        }
    }

    // Hapus data pesanan di session
    unset($_SESSION['orders']);
}
?>
