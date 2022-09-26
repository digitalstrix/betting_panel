<?php
include 'admin/connect.php';
include 'admin/session.php';
include 'admin/header.php';
$sql1="Select * from sitesettings where id =1";
          $results1=$connect->query($sql1);
          $f=$results1->fetch_assoc();
?>

<body class="vertical  light  ">
    <div class="wrapper">
        <?php
include 'admin/navbar.php';
include 'admin/aside.php';
?>

        <main role="main" class="main-content">
            <div class="container-fluid">


                <div class="card shadow mb-4">
                    <a href="dashboard.php">
                        <button type="button" class="btn btn-primary">Dashboard</button>
                    </a>
                    <div class="card-header">
                        <strong class="card-title">Add Game</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="addgamehandler.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" value="1" name="form_id">
                                    <div class="form-group mb-3">

                                        <label for="simpleinput">Site Name</label>
                                        <input type="text" id="simpleinput" class="form-control" placeholder="Game Id"
                                            name="game_id" value="">
                                    </div>
                                   
                                    <input type="submit" id="example-palaceholder" class="btn btn-primary" name="update"
                                        value="Submit">


                            </div>
                        </div> <!-- /.col -->
                        </form>
                    </div>
                </div>
            </div>





    </div> <!-- .container-fluid -->

    <?php include "admin/footer.php"; ?>