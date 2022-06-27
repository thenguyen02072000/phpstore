<?php
session_start();
    if (isset($_POST['remove'])) {
        foreach($_SESSION['cart'] as $key => $value) {
            if($value['cart_name']==$_POST['cart_name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo "<script>
                    alert('item removed');
                    window.location.href='cart.php';
                </script>";
            }
        }
    }
?>