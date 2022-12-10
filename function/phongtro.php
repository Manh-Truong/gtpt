<?php
    session_start();
    require '../connect.php';
    $err = "";
    $images = insert_image();
    echo $images;
    if(isset($_POST["submit"])){
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
    if(isset($_POST["delete"])){
        $id =  $_POST["id"];
        $query = "DELETE FROM `motel` WHERE `id`=".$id.";";
        $result = mysqli_query($connect,$query);
        if($result){
            return ['status' => 'success','messages' => 'Xóa thành công !'];
        }
        else{
            return ['status' => 'error','messages' => 'Thất bại !'];
        }
    }
    function insert_image()
    {
       $target_dir = "../uploads/";
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $today = date('Y-m-d H:i:s');
        $name = md5(basename($_FILES["images"]["name"]).$today);
        $target_file = $target_dir . basename($_FILES["images"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $target_file1 = $target_dir . $name.".".$imageFileType;
        if(strlen(basename($_FILES["images"]["name"])) < 4){
            return '';
        }
        $uploadOk = 1;
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["images"]["tmp_name"]);
          if($check !== false) {
            $uploadOk = 1;
            if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file1)) {
                return $target_file1;
            } else {
                return 'false';
            }
          } else {
            return 'false';
            $uploadOk = 0;
          }
        }

    }
?>

