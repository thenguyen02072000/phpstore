<?php 
include('../partials/connect.php');
$newid = $_GET['del_id'];

$sql = "UPDATE products SET status=0 WHERE id = $newid";
if(mysqli_query($connect, $sql)) {
    header('location: productshow.php');
} else {
    echo "Not Deleted";
}
?>