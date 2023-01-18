<?php

include '../include/config.php';
$sql = "SELECT * FROM `users` WHERE `users`.`email` = 'rafiul15-2265@diu.edu.bd'";

$result = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($result);
session_start();

if(!isset($_SESSION['isUserLoggedIn'])){

  echo "<script>window.location.href = '../admin/login.php';</script>";


}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    table,
    th,
    td {
        border: 1px solid black !important;
        border-collapse: collapse;
    }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>

            </ul>



            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">


                <li class="nav-item">
                    <a class="nav-link" href="../admin/logout.php">
                        Logout
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Panel</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    </div>
                    <div class="info">
                        <a href="../admin/index.php" class="d-block">Rafiul Islam</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="../admin/index.php" class="nav-link ">
                                <i class="nav-icon "></i>
                                <p>
                                    Dashboard

                                </p>
                            </a>

                        </li>

                        <li class="nav-item menu-open mt-2">
                            <a href="../admin/profile.php" class="nav-link ">
                                <i class="nav-icon "></i>
                                <p>
                                    Profile Setting

                                </p>
                            </a>

                        </li>
                        <li class="nav-item menu-open mt-2">
                            <a href="../admin/icon.php" class="nav-link ">
                                <i class="nav-icon "></i>
                                <p>
                                    Icon Setting

                                </p>
                            </a>

                        </li>

                      <li class="nav-item menu-open mt-2">
                        <a href="../admin/contact.php" class="nav-link ">
                          <i class="nav-icon "></i>
                          <p>
                            Contact List

                          </p>
                        </a>

                      </li>

                        <li class="nav-item menu-open mt-2">
                            <a href="../admin/counter.php" class="nav-link ">
                                <i class="nav-icon "></i>
                                <p>
                                    Counter Setting

                                </p>
                            </a>

                        </li>

                      <li class="nav-item menu-open mt-2">
                        <a href="../admin/testimonials.php" class="nav-link ">
                          <i class="nav-icon "></i>
                          <p>
                            Testimonials Setting

                          </p>
                        </a>

                      </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Profile Setting</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content" style="width:100%!important">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="">
                            <table style="width:100%!important"
                                class="table table-striped table-bordered table-responsive" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>User Name </th>
                                        <th>Email </th>
                                        <th>Title</th>

                                        <th>Address</th>
                                        <th>Degree</th>
                                        <th>City</th>
                                        <th>Website</th>
                                        <th>Age</th>
                                        <th>Phone</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                <tbody class="room_table">

                                    <tr>
                                        <td>
                                            <?=$data['name']?>
                                        </td>
                                        <td>
                                            <?=$data['username']?>
                                        </td>
                                        <td>
                                            <?=$data['email']?>
                                        </td>
                                        <td>
                                            <?=$data['title']?>
                                        </td>

                                        <td>
                                            <?=$data['address']?>
                                        </td>
                                        <td>
                                            <?=$data['degree']?>
                                        </td>
                                        <td>
                                            <?=$data['city']?>
                                        </td>
                                        <td>
                                            <?=$data['website']?>
                                        </td>
                                        <td>
                                            <?=$data['age']?>
                                        </td>
                                        <td>
                                            <?=$data['phone']?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal">
                                                <i class="fa-solid fa-pen-to-square"></i>

                                            </button>
                                        </td>
                                        <td>
                                            <i class="fa-solid fa-trash"></i>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>

                        </div>

                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
        </section>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" class="row g-3"
                            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <label>Edit Your Name</label>

                            <div class="input-group mb-3">
                                <input type="name" class="form-control" value="<?=$data['name']?>" name="name" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                            </div>

                            <label>Edit Your User Name</label>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="username" value="<?=$data['username']?>"
                                    required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                            </div>
                            <label>Edit Your Email</label>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="email" value="<?=$data['email']?>"
                                    required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                            </div>
                            <label>Edit Your Title</label>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="title" value="<?=$data['title']?>"
                                    required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                            </div>
                            <label>Edit Your Description</label>

                            <div class="input-group mb-3">

                                <textarea rows="4" cols="50" name="description">
                                <?=$data['description']?>
                                </textarea>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                            </div>
                            <label>Edit Your Address</label>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="address" value="<?=$data['address']?>"
                                    required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                            </div>
                            <label>Edit Your Degree</label>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="degree" value="<?=$data['degree']?>"
                                    required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                            </div>
                            <label>Edit Your City</label>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="city" value="<?=$data['city']?>" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                            </div>
                            <label>Edit Your Website</label>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="website" value="<?=$data['website']?>"
                                    required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                            </div>
                            <label>Edit Your Birthday</label>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="birthday" value="<?=$data['birthday']?>"
                                    required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                            </div>
                            <label>Edit Your Age</label>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="age" value="<?=$data['age']?>" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                            </div>
                            <label>Edit Your Phone</label>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="phone" value="<?=$data['phone']?>"
                                    required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    </div>
                                </div>
                            </div>


                            <!-- /.col -->
                            <div class="col-4">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            <!-- /.col -->
                    </div>
                    </form>


                </div>

            </div>
        </div>
    </div>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $title = $_POST['title'];
  $address = $_POST['address'];
  $description = $_POST['description'];
  $degree = $_POST['degree'];
  $city = $_POST['city'];
  $website = $_POST['website'];
  $age = $_POST['age'];
  $phone = $_POST['phone'];
  $birthday = $_POST['birthday'];

  //echo $FullName;
  if(empty($name) or empty($username)
  or empty($email) or empty($title)
  or empty($website) or empty($age)
  or empty($phone)
  or empty($description) or empty($address)
  or empty($degree)or empty($city)){

     echo "<script>Your Data is Empty!</script>";

}else{


$sql1 = "UPDATE users SET name='$name',username='$username',email='$email',
title='$title',description='$description',birthday='$birthday',
website='$website',phone='$phone',city='$city',age='$age',
degree='$degree',address='$address' WHERE email='$email'";

  $result1 = mysqli_query($con,$sql1);

  if($result1){

  }else{


      echo "<script>Something Went Wrong!</script>";
  }
}

}



?>
    <!-- /.content -->
    </div>


    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2022-2023 <a href="#">Admin Panel</a>.</strong>
        All rights reserved.

    </footer>



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>
