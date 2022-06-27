<?php
include("../partials/connect.php");

if($_POST['password']=="" && $_POST['password2']=="") {
    $sql = "UPDATE admins SET `role_id` = {$_POST['role']} WHERE username = '{$_POST['email']}'";
    mysqli_query($connect, $sql);
    echo "<script>
        alert('Update account successful');
        window.location.href='account.php';
    </script>";
} else if($_POST['password'] == $_POST['password2']){
    $sql = "UPDATE admins SET `password` = '{$_POST['password']}', `role_id` = {$_POST['role']} WHERE username = '{$_POST['email']}'";
    mysqli_query($connect, $sql);
    echo "<script>
        alert('Update account successful');
        window.location.href='account.php';
    </script>";
} else {
    echo "<script>
        alert('Password is not valid');
        window.location.href='account.php';
    </script>";
}
?>