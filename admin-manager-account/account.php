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
    padding: 20px;
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
                        <h1>Hoverable Table</h1>
                        <a href="createaccount.php">
                            <button style="color:green">Add New</button>
                        </a>
                        <br />
                        <br />

                        <table>
                            <tr id="header" style="color:white; background-color:#3C8DBC">
                                <th>ID</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Look</th>
                            </tr>
                            <?php
                            include('../partials/connect.php'); //Import connect
                            $sql="SELECT ad.id, ad.username, r.name, ad.status FROM admins ad JOIN roles r ON ad.role_id = r.id";
                            $results = $connect->query($sql);
                            while($final=$results->fetch_assoc()) {
                                if($final['status']==1) {
                                    $status = "Unable";
                                    $color="green";
                                    $lookcolor="red";
                                    $lookbutton="Look";
                                } else {
                                    $status = "Disable";
                                    $color="red";
                                    $lookcolor="green";
                                    $lookbutton="Unlock";
                                }
                            ?>
                            <tr>
                                <td><?=$final['id']?></td>
                                <td><?=$final['username']?></td>
                                <td><?=$final['name']?></td>
                                <td style="color:<?=$color?>"><?=$status?></td>
                                <td>
                                    <?php 
                                        if($_SESSION['userid'] != $final['id']) {           
                                    ?>
                                    <a href="updateaccount.php?up_id=<?=$final['id']?>">
                                        <button>Edit</button>
                                    </a>

                                    <?php
                                        }
                                    ?>

                                </td>
                                <td>
                                    <?php 
                                        if($_SESSION['userid'] != $final['id']) {           
                                    ?>
                                    <a href="lookaccount.php?look_id=<?=$final['id']?>&look=<?=$lookbutton?>">
                                        <button style="color:<?=$lookcolor?>"><?=$lookbutton?></button>
                                    </a><br />
                                    <?php
                                        }
                                    ?>
                                </td>
                            </tr>


                            <?php
                    }
                    ?>

                        </table>
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