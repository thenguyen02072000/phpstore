<?php 
    session_start();
    include('../partials/connect.php');
    $total = $_POST['total'];
    $phone = $_POST['phone'];
    $customer_id = $_SESSION['customer_id'];

    if(isset($_POST['checkbox-address'])) { //customer address
        $sqlCustomer = "SELECT address FROM customers WHERE id=$customer_id";
        $result = $connect -> query($sqlCustomer);
        $final = $result->fetch_assoc();
        $address = $final['address'];
    } else {
        $address = $_POST['address'];
    }   
    
    $sql = "INSERT INTO orders(customer_id,address, phonenumber,total) VALUES ($customer_id, '$address', '$phone', '$total')";
    $connect -> query($sql);


    //get order id of new order
    $sql2 = "SELECT id FROM orders order by id DESC LIMIT 1";
    $result = $connect->query($sql2);
    $final=$result->fetch_assoc();
    $order_id=$final['id']; //id of new order

    foreach($_SESSION['cart'] as $key => $value) {
        $proid=$value['item_id'];
        $quantity=$value['quantity'];
        $price = $value['cart_price'];

        $sql3 = "INSERT INTO order_details(order_id, product_id, quantity, unit_price) VALUES ($order_id, $proid, $quantity, $price)";
        echo $sql3;
        $connect -> query($sql3);
    }

    echo "<script>
        alert('ORDER IS PLACED');
        window.location.href='../index.php';
    </script>";

    unset($_SESSION['cart']);

?>