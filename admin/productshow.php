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
    padding: 30px;
}

table {
    border-spacing: 30px;
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
  include("adminpartials/aside.php")
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
                <h1>Hoverable Table</h1>
                <a href="products.php">
                    <button style="color:green">Add New</button>
                </a>
                <hr>

                <table>
                    <tr id="header" style="color:white; background-color:#3C8DBC">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    include('../partials/connect.php'); //Import connect
                    $sql="SELECT * FROM products WHERE status = 1";
                    $results = $connect->query($sql);
                    while($final=$results->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?=$final['id']?></td>
                        <td>
                            <a href="proshow.php?pro_id=<?=$final['id']?>">
                                <h3><?=$final['name']?></h3>
                            </a>
                        </td>
                        <td><?=$final['price']?></td>
                        <td>
                            <a href="proupdate.php?up_id=<?=$final['id']?>">
                                <button>Edit</button>
                            </a>
                            <a href="prodelete.php?del_id=<?=$final['id']?>">
                                <button style="color:red">Hide</button>
                            </a><br />
                        </td>
                    </tr>
                    <?php
                    }
                    ?>

                </table>






                <div class="col-sm-3">
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