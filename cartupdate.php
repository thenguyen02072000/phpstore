<?php
session_start();
$qty = $_POST['quantity'];

    if (isset($_POST['update'])) {
        foreach($_SESSION['cart'] as $key => $value) {
            if($value['cart_name']==$_POST['cart_name']) {
                $_SESSION['cart'][$key]['quantity'] = $qty;
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo "<script>
                    alert('Item updated');
                    window.location.href='cart.php';
                </script>";
            }
        }
    }
?>