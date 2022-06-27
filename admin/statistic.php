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
    padding-left: 50px;
    padding-right: 50px;
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
    $_GET['sortby'] = "product";
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
                <h1>Statistic</h1>

                <hr>
                <label for="statistic">Type</label>

                <select class="sort-by" name="sort-by" id="statistic">
                    <option value="product" <?=$_GET['sortby']=="product"?"selected":""?>>Product</option>
                    <option value="date" <?=$_GET['sortby']=="date"?"selected":""?>>Date</option>
                    <option value="customer" <?=$_GET['sortby']=="customer"?"selected":""?>>Customer</option>
                </select>

                <?php
                    include("../partials/connect.php");
                    if($_GET['sortby'] == "date") {
                        $sql = "SELECT DATE(created_at) as date, total FROM orders GROUP BY date";
                        $results = $connect -> query($sql);
                        
                ?>
                <table>
                    <tr>
                        <th style="color:white; background-color:#3C8DBC">Date</th>
                        <th style="color:white; background-color:#3C8DBC">Total</th>
                    </tr>

                    <?php
                    while($final = $results ->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?=$final['date']?></td>
                        <td><?=$final['total']?></td>
                    </tr>

                    <?php
                    }
                    echo "</table>";
                    } else if($_GET['sortby']=="customer") {
                        $sql = "SELECT c.id, c.name, o.total FROM orders o
                        RIGHT JOIN customers c
                        ON c.id = o.customer_id
                        GROUP BY c.id";
                        $results = $connect -> query($sql);
                ?>
                    <table>
                        <tr>
                            <th style="color:white; background-color:#3C8DBC">Customer ID</th>
                            <th style="color:white; background-color:#3C8DBC">Customer Name</th>
                            <th style="color:white; background-color:#3C8DBC">Total</th>
                        </tr>

                        <?php
                            while($final = $results ->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?=$final['id']?></td>
                            <td><?=$final['name']?></td>
                            <td><?=$final['total']!=0?$final['total']:0?></td>
                        </tr>
                        <?php
                            }
                        ?>

                    </table>
                    <?php
                    } else if($_GET['sortby']=="product") {  
                        $sql = "SELECT p.id, p.name, od.quantity as 'total quantity', od.unit_price*od.quantity as price FROM order_details od
                        RIGHT JOIN products p
                        ON od.product_id = p.id
                        GROUP BY p.id";
                        $results = $connect -> query($sql);
                    ?>
                    <table>
                        <tr>
                            <th style="color:white; background-color:#3C8DBC">ID</th>
                            <th style="color:white; background-color:#3C8DBC">Product name</th>
                            <th style="color:white; background-color:#3C8DBC">Total Number Product Sold</th>
                            <th style="color:white; background-color:#3C8DBC">Total Price</th>
                        </tr>

                        <?php
                        while($final = $results -> fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?=$final['id']?></td>
                            <td><?=$final['name']?></td>
                            <td><?=$final['total quantity']!=0?$final['total quantity']:0?></td>
                            <td><?=$final['price']!=0?$final['price']:0?></td>
                        </tr>

                        <?php
                        }
                        ?>
                    </table>

                    <?php
                    }
                    ?>








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
        window.location.href = `statistic.php?sortby=${event.target.value}`;
    });
    </script>
</body>

</html>