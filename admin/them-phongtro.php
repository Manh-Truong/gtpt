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
    <title>Thêm phòng trọ</title>
    
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
    <div class="modal fade" id="addMotel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
        <form action="them-phongtro.php" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thêm phòng trọ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
            </div>

            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Tên phòng trọ</span>
                    </div>
                    <input type="text" class="form-control" name="title" placeholder="Nhập tiêu đề...">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Mô tả</span>
                    </div>
                    <textarea name="description" rows="10" cols="150"></textarea>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Giá</span>
                    </div>
                    <input type="number" class="form-control" name="price" min="1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Diện tích</span>
                    </div>
                    <input type="text" class="form-control" name="area">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Địa chỉ</span>
                    </div>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Bản đồ</span>
                    </div>
                    <input type="text" class="form-control" name="latlng">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Hình ảnh</span>
                    </div>
                    <input type="file" class="form-control" name="images" id="images" style="height: 100%;" accept=".jpg, .png, .svg">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Phân loại trọ</span>
                    </div>
                    <select class="custom-select" name="category_id" id="category_id">
                        <?php
                            $sqls = "SELECT * FROM `category`";
                            $result = mysqli_query($connect, $sqls);
                            while($row = mysqli_fetch_array($result)) {
                                echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Số điện thoại</span>
                    </div>
                    <input type="text" class="form-control" name="phone">
                </div>
            
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Tiện ích</span>
                    </div>
                    <input type="text" class="form-control" name="utilities">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Tình trạng</span>
                    </div>
                    <input type="text" class="form-control" name="approve">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text">Trạng thái</span>
                    </div>
                    <input type="text" class="form-control" name="status">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                <button type="submit" class="btn btn-primary" name="addmotel">Lưu</button>
            </div>
            </div>
            <script>CKEDITOR.replace('description');</script>
        </form>
        </div>
    </div>
</body>
</html>
<?php
    include("../connect.php");
    if (isset($_POST["addmotel"])){
        $title =  $_POST["title"];
        $description =  $_POST["description"];
        $price =  $_POST["price"];
        $area =  $_POST["area"];
        $address =  $_POST["address"];
        $latlng =  $_POST["latlng"];
        $images = $images;
        $category_id =  $_POST["category_id"];
        $district_id =  $_POST["district_id"];
        $utilities =  $_POST["utilities"];
        $contact =  $_POST["contact"];
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $today = date('Y-m-d H:i:s');
        if(strlen($images) > 10){
            $query = "INSERT INTO `motel`(`count_view`,`title`, `description`, `price`, `area`, `address`, `latlng`, `images`, `user_id`, `category_id`, `district_id`, `utilities`, `phone`, `approve`, `created_at`) 
            VALUES (0,'".$title."','".$description."',".$price.",".$area.",'".$address."','".$latlng."','".$images."',".$_SESSION['id'].",".$category_id.",".$district_id.",'".$utilities."','".$contact."',1,'".$today."')";
        }else{
            $query = "INSERT INTO `motel`(`count_view`,`title`, `description`, `price`, `area`, `address`, `latlng`,  `user_id`, `category_id`, `district_id`, `utilities`, `phone`, `approve`, `created_at`) 
            VALUES (0,'".$title."','".$description."',".$price.",".$area.",'".$address."','".$latlng."',".$_SESSION['id'].",".$category_id.",".$district_id.",'".$utilities."','".$contact."',1,'".$today."')";
        }
        $result = mysqli_query($connect,$query);
        if($result){
            echo "<script> alert('Thêm trọ thành công !');</script>";
            header("Location: ../home.php");
            
        }
        else{
            echo "<script> alert('Thêm trọ thất bại !');</script>";
            header("Location: ../home.php");
           
        }
    }
?>
<?php ob_end_flush(); ?>