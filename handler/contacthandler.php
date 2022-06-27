<?php
include('../partials/connect.php');
$email = $_POST['email'];
$msg = $_POST['msg'];

$sql = "INSERT INTO contact(email, msg) VALUES('$email', '$msg')";
$connect->query($sql);

echo "<script>
            alert('Thanks for contact us. We will send you an email later.');
            window.location.href='../index.php'
        </script>";
?>