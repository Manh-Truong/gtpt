<?php ob_start(); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Quản lý phòng trọ</title>
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
        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <?php include 'topbar.php' ?>
                <div class="container-fluid">
                    <a href="#addMotel" data-toggle="modal" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm mới</a>
                    <?php include 'them-phongtro.php' ?>
                    
                    <div class="my-2"></div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Danh sách các phòng trọ</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTableMotel" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên phòng trọ</th>
                                            <th>Phân loại trọ</th>
                                            <th>Giá phòng</th>
                                            <th>Tình trạng</th>
                                            <th>Trạng thái</th>
                                            <th colspan=2 style="text-align:center;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include("../connect.php"); 
                                            $query = "SELECT * FROM Motel m INNER JOIN category c ON m.category_id = c.id";     
                                            $values = mysqli_query ($connect, $query);   
                                            while($row = mysqli_fetch_array($values)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['motel_id']; ?></td>
                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo number_format($row['price'], 0, ",", "."); ?></td>
                                            <?php if($row['approve'] == 1): ?>
                                                <td><span class="badge badge-success">Có sẵn</span></td>
                                            <?php elseif($row['approve'] == 0): ?>
                                                <td><span class="badge badge-danger">Không có sẵn</span></td>
                                            <?php endif; ?>
                                            <?php if($row['status'] == 0): ?>
                                                <td><span class="badge badge-warning">Chưa kiểm duyệt</span></td>
                                            <?php elseif($row['status'] == 1): ?>
                                                <td><span class="badge badge-success">Đã kiểm duyệt</span></td>
                                            <?php elseif($row['status'] == 2): ?>
                                                <td><span class="badge badge-danger">Sai nội dung</span></td>
                                            <?php endif; ?>
                                            <td style="text-align:center;">
                                                <a href="#edit_phongtro<?php echo $row['motel_id']; ?>" data-toggle="modal" class="btn btn-warning"><i class="far fa-edit"></i></a>
                                                <?php include 'edit-phongtro.php' ?>
                                            </td>
                                            <td style="text-align:center;">
                                                <a href="xoa-phongtro.php?motel_id=<?php echo $row['motel_id']; ?>" class="btn btn-info"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script>
        $(document).ready(function() {
            $('#dataTableMotel').DataTable({
                "iDisplayLength": 5,
                "aLengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
                "language": {
                    "lengthMenu": "Hiển thị _MENU_ bản ghi",
                    "zeroRecords": "Không tìm thấy gì",
                    "info": "Đang hiển thị trang _PAGE_ trên tổng _PAGES_ trang",
                    "infoEmpty": "Không có bản ghi nào có sẵn",
                    "infoFiltered": "(lọc được _MAX_ bản ghi)",
                    "search": "Tìm kiếm:",
                    "paginate": {
                        "first": "First",
                        "last":  "Last",
                        "next":  "Next",
                        "previous": "Previous"
                    }
                }
            }); 
        });
    </script>
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
<?php ob_end_flush(); ?>