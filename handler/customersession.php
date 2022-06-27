<?php
    if(empty($_SESSION['username'] AND $_SESSION['password'])) {
        echo "<script>
            window.location.href='customerforms.php';
        </script>";
    }
?>