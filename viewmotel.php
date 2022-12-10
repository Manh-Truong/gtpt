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
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/home.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/time.js"></script>
    <title>Xem phòng trọ</title>
</head>
<body>
    <?php
        require 'layouts/header.php';
    ?>
    <div class="site">
        <div class="site_content">
            <div class="container">
                <div class="viewmt">
                    <div class="row">
                        <?php
                            $sqls = "SELECT * FROM `motel` WHERE `motel_id`=".$_GET["motel_id"];
                            $users = mysqli_query($connect,$sqls);
                            $value = mysqli_fetch_assoc($users);
                            $view = $value["count_view"];
                            $view = $view + 1;
                            $sqlUpload = "UPDATE `motel` SET `count_view`=".$view." WHERE `motel_id`=".$_GET["motel_id"];
                            $users = mysqli_query($connect,$sqlUpload);
                            $str_date = strtotime($value['created_at']);
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
                        <div class="viewmt_left col-lg-8 col-sx-12">
                            <h1 class="title"> <?php echo $value["title"]; ?></h1>
                            <hr>
                            <div class="img">
                                <div class="img_info flex">
                                    <div class="img_info_price"><span class='price'><?php echo $value["price"]; ?></span> VND</div>
                                    <div class="img_info_view"><span class='view'>Lượt xem <?php echo $view; ?></span> 
                                    <span class='time'>Ngày đăng: <span><?php echo $timepost; ?></span></span>
                                </div>
                                </div>
                                <div class="img_show">
                                    <img src="uploads/<?php echo $value["images"]; ?>" alt="" srcset="">
                                </div>
                            </div>
                            <div class="description">
                                <div class="description_title">
                                    Mô tả :
                                </div>
                                <div class="description_detail">
                                    <p><?php echo $value["description"]; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="viewmt_right col-lg-4 col-sx-12">
                            <h3 class="tile">Thông tin người đăng</h3>
                            <button class="call"><i class="fal fa-phone-square"></i> Liên lạc với vời bán</button>
                            <p class="address">Địa chỉ:  <span class="address_detail"><?php echo $value["address"]; ?></span></p>
                            <div class="note flex">
                                <div class="price">Giá phòng: <span class="price_detail"><?php echo $value["price"]; ?></span> VND</div>
                                <div class="area">Diện tích: <span class="area_detail"><?php echo $value["area"]; ?></span> m<sup>2</sup></div>
                            </div>
                            <br>
                            <div class="orther">
                                <h4 class="orther_title">Tiện ích phòng trọ</h4>
                                <div class="orther_detail flex">
                                    <?php
                                         $ip = $value["utilities"];
                                        $iparr = explode(",",$ip  ); 
                                        foreach($iparr as $temp){
                                            ?>
                                                <div class="ok"><i class="far fa-check"></i> <?php echo $temp; ?>&ensp;</div>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="report">
                                <h3 class="report_title">BÁO CÁO</h3>
                                <div class="report_detail">
                                    <span class="ok">Đã cho thuê <i class="fas fa-check-circle"></i></span> <br>
                                    <span class="ok">Sai thông tin</span>
                                </div>
                                <button class="report_send">Gửi báo cáo</button>
                            </div>
                            <div class="acti">
                                <button class="edit_post">Sửa bài đăng</button>
                            </div>
                        </div>
                    </div>
                </div>
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
</html>