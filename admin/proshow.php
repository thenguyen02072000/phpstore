<!DOCTYPE html>
<html>
<?php
    include("adminpartials/head.php");
    ?>
<style>
table,
th,
td {
    border: 1px solid black;
    padding: 10px;
}

table {
    border-spacing: 15px;
}
</style>

<body class="hold-transition skin-blue sidebar-mini ">
    <div class="wrapper">

        <?php 
include("adminpartials/session.php");
include("adminpartials/header.php");
include("adminpartials/aside.php");
?>




        <!-- Left side column. contains the logo and sidebar -->
        <?php 
  include("adminpartials/aside")
  ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                Dashboard
                <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-9">

                        <?php
                    include('../partials/connect.php'); //Import connect
                    $id=$_GET['pro_id'];
                    $sql = "SELECT * FROM products WHERE id = {$id}";
                    $results = $connect -> query($sql);
                    $final=$results->fetch_assoc();



                    echo "You are selected product";
                    ?>



                        <table>
                            <tr>
                                <td style="background-color:#3C8DBC;color:white">ID</td>
                                <td><?=$final['id']?></td>
                            </tr>
                            <tr>
                                <td style="background-color:#3C8DBC;color:white">Name</td>
                                <td><?=$final['name']?></td>
                            </tr>
                            <tr>
                                <td style="background-color:#3C8DBC;color:white">Price</td>
                                <td><?=$final['price']?></td>
                            </tr>
                            <tr>
                                <td style="background-color:#3C8DBC;color:white">Description</td>
                                <td><?=$final['description']?></td>
                            </tr>
                            <tr>
                                <td style="background-color:#3C8DBC;color:white">Image</td>
                                <td>
                                    <img src="../<?=$final['picture']?>" width="400px" height="600px">

                                </td>
                            </tr>

                        </table>






                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php 
  include("adminpartials/footer.php");
  ?>
</body>

</html>