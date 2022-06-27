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
                <h1>Order Info</h1>
                <?php
                    include("../partials/connect.php");
                    $sql = "SELECT o.id, c.name, DATE(o.created_at) as date,o.total,o.phonenumber, o.address, o.status FROM orders o
                    JOIN customers c
                    ON o.customer_id = c.id
                    WHERE o.id = {$_GET['order_id']}";
                    $results = $connect -> query($sql);
                    $final=$results->fetch_assoc();

                ?>
                <hr>
                <table>
                    <tr>
                        <td style="color:white; background-color:#3C8DBC">ID</td>
                        <td><?=$final['id']?></td>
                    </tr>
                    <tr>
                        <td style="color:white; background-color:#3C8DBC">Customer Name</td>
                        <td><?=$final['name']?></td>
                    </tr>
                    <tr>
                        <td style="color:white; background-color:#3C8DBC">Phone Number</td>
                        <td><?=$final['phonenumber']?></td>
                    </tr>
                    <tr>
                        <td style="color:white; background-color:#3C8DBC">Address</td>
                        <td><?=$final['address']?></td>
                    </tr>
                    <tr>
                        <td style="color:white; background-color:#3C8DBC">Date</td>
                        <td><?=$final['date']?></td>
                    </tr>
                    <tr>
                        <td style="color:white; background-color:#3C8DBC">Total</td>
                        <td><?=$final['total']?></td>
                    </tr>
                </table>


                <h3>Order Details</h3>
                <table>
                    <tr>
                        <th style="color:white; background-color:#3C8DBC">Product Name</th>
                        <th style="color:white; background-color:#3C8DBC">Unit Price</th>
                        <th style="color:white; background-color:#3C8DBC">quantity</th>
                        <th style="color:white; background-color:#3C8DBC">Price</th>
                    </tr>
                    <?php
                    $sql = "SELECT p.name, od.unit_price,od.quantity,od.unit_price*od.quantity as price  FROM order_details od JOIN products p ON od.product_id= p.id
                    WHERE od.order_id = {$_GET['order_id']}";
                    
                    $results = $connect -> query($sql);
                    while($final=$results->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?=$final['name']?></td>
                        <td><?=$final['unit_price']?></td>
                        <td><?=$final['quantity']?></td>
                        <td><?=$final['price']?></td>

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