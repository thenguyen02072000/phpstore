<?php
include('../partials/connect.php');
$name = $_POST['productName'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];
$tmp_dir = ini_get('upload_tmp_dir') ? ini_get('upload_tmp_dir') : sys_get_temp_dir();

$target="uploads/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$file_store = "uploads/".$file_name;

move_uploaded_file($file_tmp, "../".$file_store);

$sql = "INSERT INTO products(name, price, picture,description, category_id) VALUES('$name', '$price', '$file_path', '$description', $category)";
mysqli_query($connect, $sql);

header('location: productshow.php');

?>