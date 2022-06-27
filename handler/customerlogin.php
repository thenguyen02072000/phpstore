<?php 

    session_start();

    if(isset($_POST['login'])) {
        include("../partials/connect.php");
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="SELECT * FROM customers WHERE username='$username' AND password='$password' ";
        $result=$connect->query($sql);
        $final=$result->fetch_assoc();
        
        

        if($username=$final['username'] AND $password=$final['password']) {
            
            $_SESSION['username'] = $final['username'];
            $_SESSION['password'] = $final['password'];
            $_SESSION['customer_id']= $final['id'];
            header('location: ../cart.php');
        } else {
            echo "<script>
                alert('Credentials are wrong');
                window.location.href='../customerforms.php';
            </script>";
        }
    }
?>