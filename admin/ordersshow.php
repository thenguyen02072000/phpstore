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
  include("adminpartials/aside.php");
  if(!isset($_GET['sortby'])) {
    $_GET['sortby'] = "id";
  }
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

                <hr>
                <label for="cars">Sort By</label>

                <select class="sort-by" name="sort-by" id="cars">
                    <option value="id" <?=$_GET['sortby']=="id"?"selected":""?>>ID</option>
                    <option value="name" <?=$_GET['sortby']=="name"?"selected":""?>>Customer</option>
                    <option value="date" <?=$_GET['sortby']=="date"?"selected":""?>>Date</option>
                    <option value="total" <?=$_GET['sortby']=="total"?"selected":""?>>Total</option>
                    <option value="status" <?=$_GET['sortby']=="status"?"selected":""?>>Status</option>
                </select>

                <table>
                    <tr id="header" style="color:white; background-color:#3C8DBC">
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Phone number</th>
                        <th>Status</th>
                        <th>Show info</th>
                    </tr>
                    <?php
                    include('../partials/connect.php'); //Import connect
                    $order_by = $_GET['sortby'];
                    
                    $sql="SELECT o.id, c.name, DATE(o.created_at) as date,o.total,o.phonenumber, o.status FROM orders o
                    JOIN customers c
                    ON o.customer_id = c.id 
                    ORDER BY $order_by";
                    $results = $connect->query($sql);
                    while($final=$results->fetch_assoc()) {
                        if($final['status'] == 1) {
                            $color = "orange";
                        } else if($final['status'] == 2) {
                            $color = "blue";
                        } else if($final['status'] == 3) {
                            $color = "green";
                        } else {
                            $color = "red";
                        }
                    ?>
                    <tr>
                        <td><?=$final['id']?></td>
                        <td><?=$final['name']?></td>
                        <td><?=$final['date']?></td>
                        <td><?=$final['total']?></td>
                        <td><?=$final['phonenumber']?></td>
                        <td>
                            <select style="color:<?=$color?>" class="status<?=$final['id']?>" name="status">
                                <option value="1" <?= $final['status']==1?"selected":""?>>Processing
                                </option>
                                <option value="2" <?= $final['status']==2?"selected":""?>>Delivering</option>
                                <option value="3" <?= $final['status']==3?"selected":""?>>Successful</option>
                                <option value="4" <?= $final['status']==4?"selected":""?>>Cancelled</option>
                            </select>
                            <script>
                            var selectElement = document.querySelector('.status<?=$final['id']?>');
                            selectElement.addEventListener('change', (event) => {
                                window.location.href =
                                    `changestatushandler.php?order_id=<?=$final['id']?>&status=${event.target.value}`;
                            });
                            </script>
                        </td>
                        <td><a href="ordershowinfo.php?order_id=<?=$final['id']?>">
                                <button>Show</button>
                            </a></td>
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

    <script>
    var selectElement = document.querySelector('.sort-by');

    selectElement.addEventListener('change', (event) => {
        window.location.href = `ordersshow.php?sortby=${event.target.value}`;
    });
    </script>
</body>

</html>