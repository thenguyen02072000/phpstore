<?php 
include("../partials/connect.php");
if(isset($_POST['update'])) {
    $target="uploads/";
    $file_path=$target.basename($_FILES['file']['name']);
    $file_name=$_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_store = "uploads/".$file_name;
    move_uploaded_file($file_tmp, $file_store);
    
    if(!$file_name) { //didn't choose file
        $sql = "UPDATE products
        SET name = '{$_POST['productName']}', 
        price = {$_POST['price']},
        description = '{$_POST['description']}',
        category_id = {$_POST['category']}
        WHERE id = {$_POST['form_id']}
    ";
    } else {
        $sql = "UPDATE products
        SET name = '{$_POST['productName']}', 
        price = {$_POST['price']},
        description = '{$_POST['description']}',
        category_id = {$_POST['category']},
        picture = '$file_path'
        WHERE id = {$_POST['form_id']}";
     }

    if(mysqli_query($connect, $sql)) {
        echo "Thanh cong";
        header('location: productshow.php');
    } else {
        echo "That bai";
    }
}
?>