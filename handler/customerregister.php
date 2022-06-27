<?php
    include('../partials/connect.php');
    $username = $_POST['username'];

    $sql0 = "SELECT username FROM customers WHERE username = '$username'";
    $result = $connect -> query($sql0);
    $final = $result->fetch_assoc();
    if($final['username']) { //neu tai khoan da ton tai
        echo "<script>alert('Username already exists, please choose another account username!');
        window.location.href='customerforms.php'; 
            </script>";
    } else {
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $phonenumber = $_POST['phonenumber'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $fullname = $_POST['fullname'];
        if($password == $password2) {
            $sql = "INSERT INTO `customers`(`username`, `password`, `phonenumber`, `email`, `address`, `name`) VALUES ('$username', '$password', '$phonenumber', '$email', '$address','$fullname')";
            echo $sql;
            $connect -> query($sql);
            echo "<script> alert('You are registered!');
            window.location.href='customerforms.php'; 
            </script>";
        }  else {
            echo "<script>alert('Password did not math!');
        window.location.href='customerforms.php'; 
            </script>";
        }
    }


    
?>