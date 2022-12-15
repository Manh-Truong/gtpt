 <?php
    session_start();
    require 'connect.php';
    if(isset($_SESSION["name"])){
       
    }
    else{
        header("Location: index.php");
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/home.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/time.js"></script>
    <title>Trang chủ</title>
</head>

<body>
    <?php
        require 'layouts/header.php';
    ?>
    <div class="site">
        <div class="container">
            <div class="row">
                <!-- Get data -->
                <?php
                    $sqls = "SELECT * FROM `motel`";
                    if(isset($_GET["content"])){
                        if($_GET["content"] == "view"){
                            $sqls = "SELECT * FROM `motel` ORDER BY count_view DESC";
                        }
                        if($_GET["content"] == "new"){
                            $sqls = "SELECT * FROM `motel` ORDER BY created_at DESC";
                        }
                        if($_GET["content"] == "addr"){
                            $sqls = "SELECT * FROM `motel` WHERE `district_id`=".$_GET["id"];
                        }
                    }
                    $result = mysqli_query($connect,$sqls);
                    //Chỉnh cái đã
                    while($row = mysqli_fetch_array($result)) {
                        $str_date = strtotime($row['created_at']);
                            $str_hsd = strtotime(date('Y/m/d'));
                            $days = round(($str_hsd - $str_date) / (60*60*24))+1;
                            $timepost = "";
                            if($days > 7){
                                $days = $days /7;
                                $timepost = $days." tuần trước";
                            }else{
                                if($days == 0){

                                    $timepost = " hôm nay";
                                }else{

                                    $timepost = $days." ngày trước";
                                }
                            }
                        ?>
                        <div class="col-lg-6 col-xs-12">
                            <div class="motel flex">
                                <a href="viewmotel.php?motel_id=<?php echo $row["motel_id"]; ?>">
                                    <div class="motel_left">
                                        <img src="uploads/<?php echo $row["images"]; ?>" alt="" srcset="" width ='150' height='150'>
                                    </div>
                                    <div class="motel_center">
                                        <h1 class='motel_center_title'>
                                            <a href="viewmotel.php?motel_id=<?php echo $row["motel_id"]; ?>"> <?php echo $row["title"]; ?></a>
                                        </h1>
                                        <?php
                                            $sqls = "SELECT * FROM `user` WHERE `id`=".$row["user_id"];
                                            $users = mysqli_query($connect,$sqls);
                                            $value = mysqli_fetch_assoc($users);
                                        ?>
                                        <p class='motel_center_info'><i class="fas fa-user-circle"></i> Người đăng tin: <span><a href=""> <?php echo $value["name"]; ?></a></span></p>
                                        <p class='motel_center_info'><i class="fal fa-times-hexagon"></i> Diện tích: <span><?php echo $row["area"]; ?> m <sup>2</sup></span></p>
                                        <p class='motel_center_info'><i class="far fa-map-marker-alt"></i> Địa chỉ: <span> <?php echo $row["address"]; ?></span></p>
                                        <p class='motel_center_info price'><i class="fas fa-money-bill-alt"></i> Giá thuê: <span class="sprice"> <?php echo $row["price"]; ?></span> <b>VNĐ</b></p>
                                    </div>
                                    <div class="motel_right">
                                        <p class='motel_right_info time'><i class="fal fa-clock"></i> Đăng:  <b><?php echo $timepost; ?></p></b>
                                        <p class='motel_right_info'><i class="far fa-eye"></i> Lượt xem <span> <?php echo $row["count_view"]; ?></span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                ?>
                <!-- Thêm phòng trọ -->
            </div>
        </div>
        <?php
            require 'layouts/addtro.php';
        ?>
        <?php
            require 'layouts/editmember.php';
        ?>
    </div>
</body>
<script language="javascript">
            // Hàm xử lý khi thẻ select thay đổi giá trị được chọn
            // obj là tham số truyền vào và cũng chính là thẻ select
            function genderChanged(obj)
            {
                 var id  =document.getElementById('khuvuc').value;
                 document.getElementsByClassName('addres')[0].href='home.php?content=addr&id='+id;
            }
 
</script>
</html>