<?php
    include("../partials/connect.php");
    $order_id = $_GET['order_id'];
    $status = $_GET['status'];
    $sql="UPDATE orders SET status = $status WHERE id = $order_id;";
    echo $sql;
    mysqli_query($connect, $sql);
    header("Location: ordersshow.php"); 
?>