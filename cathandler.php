<?php 
session_start();
    if (isset($_SESSION['cart'])) { //if cart is not empty 
        $checker = array_column($_SESSION['cart'], 'cart_name'); 
        if(in_array($_GET['cart_name'], $checker)) {// if product is already in cart
            echo "<script>
                alert('Product is already in the cart');
                window.location.href='product.php';
            </script>";
        } else {
            $count=count($_SESSION['cart']); //size of array
            $_SESSION['cart'][$count]=array('item_id'=>$_GET['cart_id'], 'cart_name' => $_GET['cart_name'], 'cart_price'=>$_GET['cart_price'],
        'quantity'=>1);
            echo "<script>
                alert('Product Added');
                window.location.href='product.php'
            </script>";
        }

        
    } else { //if cart is empty create new cart and add product
        $_SESSION['cart'][0]=array('item_id'=>$_GET['cart_id'], 'cart_name' => $_GET['cart_name'], 'cart_price'=>$_GET['cart_price'], 
        'quantity'=>1);
        echo "<script>
            alert('Product Added');
            window.location.href='product.php'
        </script>";
    }
?>