<?php ob_start(); ?>
<?php if(!isset($_SESSION)) { 
session_start(); 
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa người dùng</title>
    
    <style>
        td{
            padding-right: 30px;
            color: black;
        }

        tr td{
            padding-top: 15px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 0;
            box-shadow   : none;
            height: 45px;

            &:hover {
                box-shadow: none;
            }

            &.active,
            &:focus {
                box-shadow: none;
            }
        }

        .col-form-label{
            padding-left: 30px;
        }

    </style>
</head>
<body>
    <div class="modal fade" id="edit_user<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <?php
            include("../connect.php");
            $sql = "SELECT * FROM user WHERE id='".$row['id']."'";
            $query = mysqli_query($connect, $sql);
            $row = mysqli_fetch_array($query);
        ?>
        <form action="edit-nguoidung.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sửa người dùng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Tên người dùng</span>
                    </div>
                    <input type="text" class="form-control" name="Name" value="<?php echo $row['name']; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Tên tài khoản</span>
                    </div>
                    <input type="text" class="form-control" name="Username" value="<?php echo $row['username']; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Email</span>
                    </div>
                    <input type="email" class="form-control" name="Email" value="<?php echo $row['email']; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Số điện thoại</span>
                    </div>
                    <input type="text" class="form-control" name="Phone" value="<?php echo $row['phone']; ?>">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Hình ảnh</span>
                    </div>
                    <img src="../uploads/user/<?php echo $row['avatar']; ?>" style="height: 200px; width: 300px;">
                    <input type="file" class="form-control" name="avatar" id="avatar" style="height: 100%;" accept=".jpg, .png, .svg">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                <button type="submit" class="btn btn-primary" name="edit_user">Lưu</button>
            </div>
            </div>
            <script>CKEDITOR.replace('description');</script>
        </form>
        </div>
    </div> 
</body>
</html>
<?php
    include '../connect.php';
    if(isset($_POST['edit_user'])) 
    {   
        $user_id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $img_name = $_FILES['avatar']['name'];

        if(file_exists("../uploads/".$img_name)) {
            $str = $_FILES['avatar']['name'];
            $_SESSION['status'] = "Ảnh đã tồn tại '.$str.'";
            header('Location: ../admin/nguoidung.php');
        }
        else{
            $sql = "UPDATE user SET Name='$name', username='$username', email='$email', 
            phone='$phone', avatar='$img_name' WHERE id='$user_id'";
            $query_run = mysqli_query($connect, $sql);

            if($query_run){
                move_uploaded_file($_FILES['avatar']['tmp_name'], '../uploads/'.$img_name);
                $_SESSION['success'] = "Cập nhật thành công";
                header('Location: ../admin/nguoidung.php');
            }else{
                $_SESSION['success'] = "Cập nhật không thành công";
                header('Location: ../admin/nguoidung.php');
            }
        }
        mysqli_close($connect); 
    }
?>
<?php ob_end_flush(); ?>