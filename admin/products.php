<!DOCTYPE html>
<html>
<?php
    include("adminpartials/head.php");
    ?>

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
                <div class="row">
                    <div class="col-sm-3">
                    </div>

                    <div class="col-sm-6">
                        <form role="form" action="producthandler.php" method="POST" enctype="multipart/form-data">
                            <h1>Product</h1>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="productName"
                                        placeholder="Enter Product Name" name="productName">
                                </div>

                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" placeholder="Price" name="price">

                                    <div class="form-group">
                                        <label for="picture">File input</label>
                                        <input type="file" id="picture" name="file">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" class="form-control" rows="10"
                                            placeholder="Enter Description" name="description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select name="category">
                                            <?php 
                                    include("../partials/connect.php");
                                    $cat="SELECT * FROM categories";
                                    $results = mysqli_query($connect, $cat);
                                    while($row=mysqli_fetch_assoc($results)) {
                                        echo "<option value=".$row['id'].">".$row['name']."</option>";
                                    }
                                ?>
                                        </select>
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>
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