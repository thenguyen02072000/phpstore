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
                        <form role="form" action="updateaccounthandler.php" method="POST">
                            <h1>Create User</h1>
                            <div class="box-body">
                                <?php

                                include("../partials/connect.php");
                                $sql = "SELECT * FROM admins WHERE id={$_GET['up_id']}";
                                $results = $connect->query($sql);
                                $final = $results->fetch_assoc();
                                ?>

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="email">Email Account</label>
                                        <input type="email" class="form-control" placeholder="Enter Email for user"
                                            name="email" require value="<?=$final['username']?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password(If you don't want to change, let it
                                            empty)</label>
                                        <input type="password" class="form-control" placeholder="Enter New Password"
                                            name="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
                                            title="Password minimum eight characters, at least one letter and one number">
                                    </div>

                                    <div class="form-group">
                                        <label for="password2">Password</label>
                                        <input type="password" class="form-control" placeholder="Confirm New Password"
                                            name="password2" attern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
                                            title="Password minimum eight characters, at least one letter and one number">
                                    </div>

                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select name="role">
                                            <?php 
                                    $sql="SELECT * FROM roles";
                                    $results = mysqli_query($connect, $sql);
                                    while($row=mysqli_fetch_assoc($results)) {
                                        if($row['id']==$final['role_id']) {
                                            echo "<option selected value=".$row['id'].">".$row['name']."</option>";
                                        } else {
                                        echo "<option value=".$row['id'].">".$row['name']."</option>";
                                        }
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