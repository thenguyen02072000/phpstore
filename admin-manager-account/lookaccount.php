<?php
    if($_GET['look']=="Look") { //look user
        $status = "0";
    } else { //unlook user
        $status = "1";
    }
    include("../partials/connect.php");
    $sql = "UPDATE admins SET status=$status WHERE id = {$_GET['look_id']}";
    if(mysqli_query($connect, $sql)) {
        header('location: account.php');
    } else {
        echo "That bai";
    }
?>