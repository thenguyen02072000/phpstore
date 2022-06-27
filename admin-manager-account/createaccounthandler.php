<?php
    include("../partials/connect.php");
    $sql = "SELECT id FROM admins WHERE username = '{$_POST['email']}'";
    $result = $connect->query($sql);
    $final = $result ->fetch_assoc();
    if($_POST['password'] != $_POST['password2']) {
        echo "<script>
            alert('Password confirm is not right. Please enter same password!');
            window.location.href='createaccount.php';
        </script>";
    }
    if(isset($final['id'])) {
        echo "<script>
            alert('Email is existed. Please enter different email!');
            window.location.href='createaccount.php';
        </script>";
    }

    $sql = "INSERT INTO `admins`(`username`, `password`, `role_id`) VALUES ('{$_POST['email']}', '{$_POST['password']}', '{$_POST['role']}')";
    echo $sql;
    if(mysqli_query($connect, $sql)) {
        echo "<script>
            alert('Added account successful!');
            window.location.href='account.php';
        </script>";
    } else  {
        echo "That bai";
    }

?>