<?php ob_start(); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Người dùng - Admin</title>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include 'sidebar.php' ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include 'topbar.php' ?>
                <div class="container-fluid">
                    <a href="#addUser" data-toggle="modal" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm mới</a>
                    <?php include 'them-nguoidung.php' ?>

                    <div class="my-2"></div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Danh sách người dùng</h6>
                        </div>
                        <div class="card-body">
                            <?php
                            if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                                echo "<script> alert('" . $_SESSION['success'] . "')</script>";
                                unset($_SESSION['success']);
                            }

                            if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                                echo "<script> alert('" . $_SESSION['status'] . "')</script>";
                                unset($_SESSION['status']);
                            }
                            ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã người dùng</th>
                                            <th>Tên người dùng</th>
                                            <th>Email</th>
                                            <th>Số điện thoại</th>
                                            <th>Ảnh</th>
                                            <th colspan=3 style="text-align:center;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("../connect.php");
                                        $query = "SELECT * FROM user";
                                        $values = mysqli_query($connect, $query);
                                        while ($row = mysqli_fetch_array($values)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td><img src="../uploads/<?php echo $row['avatar']; ?>" style="height: 150px;"></td>
                                                <td style="text-align:center;">
                                                    <a href="#edit_user<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><i class="far fa-edit"></i></a>
                                                    <?php include 'edit-nguoidung.php' ?>
                                                </td>
                                                <td style="text-align:center;">
                                                    <a href="xoa-nguoidung.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                                <td style="text-align:center;">
                                                    <a href="#changepass_user<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-secondary">
                                                        <i class="fas fa-unlock-alt"></i> Đổi mật khẩu</a>
                                                    <?php include 'doi-mat-khau.php' ?>
                                                </td>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logout Modal-->
        <?php include './function/logoutmodal.php' ?>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

</body>

</html>